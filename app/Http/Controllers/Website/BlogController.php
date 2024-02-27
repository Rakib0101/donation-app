<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\PostCategory;
use Modules\Blog\Entities\PostComment;

class BlogController extends Controller
{
    /**
     * Get all posts
     *
     * @return void
     */
    public function blogPosts(Request $request)
    {
        try {
            $code = currentLangCode();
            $key = request()->search;
            $posts = Post::query()
                ->where('locale', $code)
                ->published()
                ->withCount('comments');

            if ($key) {
                $posts->whereLike('title', $key);
            }

            if ($request->category) {
                $category_ids = PostCategory::whereIn('slug', $request->category)
                    ->get()
                    ->pluck('id');
                $posts = $posts
                    ->whereIn('category_id', $category_ids)
                    ->latest()
                    ->paginate(10)
                    ->withQueryString();
            } else {
                $posts = $posts
                    ->latest()
                    ->paginate(10)
                    ->withQueryString();
            }

            $recent_posts = Post::where('locale', $code)
                ->published()
                ->withCount('comments')
                ->latest()
                ->take(5)
                ->get();
            $categories = PostCategory::latest()->get();

            return view('frontend.pages.blog', compact('posts', 'categories', 'recent_posts'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Post details
     *
     * @param  string  $slug
     * @return void
     */
    // public function blogPost($slug)
    public function blogPost()
    {
        try {
            // $code = currentLangCode();
            // $data['post'] = Post::published()
            //     ->whereSlug($slug)
            //     ->where('locale', $code)
            //     ->with(['author:id,name,name', 'comments.replies.user:id,name,image'])
            //     ->first();

            // if (! $data['post']) {
            //     $current_language = getLanguageByCode($code);
            //     $post_language = getLanguageByCode(Post::whereSlug($slug)->value('locale'));
            //     $data['error_message'] = "This post is not available in {$current_language}, change the language to {$post_language} to see this post";

            //     flashError($data['error_message']);
            //     abort(404);
            // }

            // return view('frontend.pages.blog-details', $data);
            return view('frontend.pages.blog-details');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Post comment
     *
     * @return void
     */
    public function comment(Post $post, Request $request)
    {
        try {
            if (! auth()->check()) {
                flashError(__('if_you_perform_this_action_you_need_to_login_your_account_first_do_you_want_to_login_now'));

                return redirect()->route('login');
            }

            $request->validate([
                'body' => 'required|max:2500|min:2',
            ]);

            $comment = new PostComment();
            $comment->author_id = auth()->user()->id;
            $comment->post_id = $post->id;
            if ($request->has('parent_id')) {
                $comment->parent_id = $request->parent_id;
                $redirect = '#replies-'.$request->parent_id;
            } else {
                $redirect = '#comments';
            }
            $comment->body = $request->body;
            $comment->save();

            return redirect(url()->previous().$redirect);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
