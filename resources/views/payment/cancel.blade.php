@extends('layouts.app')

@section('main')
    <div class="bg-gray-100 h-screen flex items-center justify-center">
        <div class="bg-white text-center px-12 py-6 rounded-md shadow-md">
            <div class="w-full flex justify-center">
                <img src="https://aiimageclub.com/wp-content/themes/aijourney/assets/images/payment-failed.png" alt="Payment Canceled" class="w-1/2">
            </div>
            <div class="mt-4">
                <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Payment Canceled!</h3>
                <p class="text-gray-600 my-2">Unfortunately! Your payment has been declined or canceled.</p>
                <p>We request you to try again later!</p>
                <div class="py-10 text-center">
                    <a href="/" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                        GO BACK
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
