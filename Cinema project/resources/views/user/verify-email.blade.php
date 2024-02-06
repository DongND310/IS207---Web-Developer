<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/verifyemail.css') }}">
    <link rel="stylesheet" type="text/css" href="verifyemail.css">
    <div class="noti">
        
        {{ __('Đăng ký tài khoản thành công. Chúng tôi vừa gửi cho bạn một email xác nhận tài khoản, hãy bấm vào link xác nhận email đó trước khi có thể đăng nhập và tận hưởng quyền lợi thành viên của WCINEMA nhé!') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="noti">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="noti-resend">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="resend">
                <x-primary-button>
                    Gửi lại email xác nhận
                </x-primary-button>
            </div>
        </form>

    </div>
</x-guest-layout>
