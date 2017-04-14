@extends('layouts.front')

@section('title', __('static.contact_us'))

@section('style')
    @parent
    .content {
        padding: 0 30px 36px 30px;
    }
    .contact-header {
        font-size: 20px;
        margin: 28px auto;
    }
    .form {
        width: 50%;
        float: left;
        padding-top: 20px;
        padding-left: 100px;
    }
    .map {
        width: 50%;
        float: left;
        padding-top: 20px;
    }
    .form input[type=text] {
        display: block;
        width: 300px;
        height: 40px;
        border: 0;
        margin-bottom: 10px;
        padding: 0 32px;
    }
    textarea {
        display: block;
        width: 300px;
        height: 130px;
        border: 0;
        margin-bottom: 10px;
        padding: 12px 32px;
    }
    .form input[type=submit] {
        margin-left: 165px;
    }
    @media screen and (max-width: 1199px) {
        .contact-header {
            margin: 20px auto;
        }
        .form {
            width: 100%;
            padding-left: 0;
            text-align:right;
        }
        .map {
            margin-top: 15px;
            width: 100%;
        }
        iframe {
            width: 100%;
        }
        .form input[type=text] {
            width: 100%;
        }
        textarea {
            width: 100%;
        }
        .form input[type=submit] {
            margin-left: 0;
        }
    }
        @media screen and (max-width: 1199px) and (min-width: 490px) {
            .form {
                width: 50%;
            }
            .map {
                width: 50%;
            }
        }
@endsection

@section('content')
    <div class="fixed-width-1100">
        <h3 class="contact-header">{{ __('static.contact_us') }}</h3>
        <div class="form">
            <form>
                <input type="text" name="name" placeholder="{{ __('static.contact_name') }}" Required>
                <input type="text" name="tel" placeholder="{{ __('static.contact_tel') }}">
                <input type="text" name="email" placeholder="{{ __('static.contact_email') }}" Required>
                <input type="text" name="product" placeholder="{{ __('static.contact_product') }}" value="{{ $productname }}">
                <textarea name="content" placeholder="{{ __('static.contact_content') }}"></textarea>
                <input type="submit" name="submit" class="id-button-p" value="發送">
            </form>

        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.6630872773617!2d121.56882481463622!3d25.045505283966925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abbd524cf0a7%3A0xea7dc23efc68ebfc!2zMTEw5Y-w5YyX5biC5L-h576p5Y2A5rC45ZCJ6LevMTY46Jmf!5e0!3m2!1szh-TW!2stw!4v1491534515942" width="440" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@endsection
