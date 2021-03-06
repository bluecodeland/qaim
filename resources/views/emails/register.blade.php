@if($user->hasRole('prospect'))
<p dir="rtl">برادر عزيز {{ $user->firstname }} {{ $user->lastname }}</p>

<p dir="rtl">ضمن خوش آمد گويي به شما، شما مرحله ي اول ثبت نام در سامانه پذيرش مشترك مدارس و مراكز فقهي را با موفقيت به پايان رسانديد.
لطفا براي بارگزاري عكس و تكميل فرم ثبت نام مجددا به سايت {{ $options->get('site_url')->value }} مراجعه فرماييد.</p>

<p dir="rtl">نام كاربري: {{ $user->email }}</p>

<p dir="rtl">كلمه ي عبور: <strong>{{ $password }}</strong></p>

<p dir="rtl">با تشكر تيم فني  سامانه پذيرش مشترك مدارس و مراكز فقهي</p>

<p dir="rtl">داوطلب گرامی: چنانچه ظرف مدت 48 ساعت نسبت به تکمیل ثبت نام اقدام نفرمائید، سامانه به صورت خودکار کاربری شما را حذف نموده و بایستی برای ثبت نام، از ابتدا مراحل را طی نمایید.</p>
@else
<p dir="rtl">برادر عزيز {{ $user->firstname }} {{ $user->lastname }}</p>

<p dir="rtl">ضمن خوش آمد گويي به شما، به سايت {{ $options->get('site_url')->value }} مراجعه فرماييد.</p>

<p dir="rtl">نام كاربري: {{ $user->email }}</p>

<p dir="rtl">كلمه ي عبور: <strong>{{ $password }}</strong></p>

<p dir="rtl">با تشكر تيم فني  سامانه پذيرش مشترك مدارس و مراكز فقهي</p>

@endif