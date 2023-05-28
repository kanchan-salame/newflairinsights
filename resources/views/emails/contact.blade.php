@component('mail::message')
# Introduction

<div>
<a href="http://www.flairinsights.com/"><img src="http://www.flairinsights.com/images/flair-insight-logo.png"></a>
<p style="color:#000">+91-89561 90780</p>
<div style="color:#000;">
    <b>Thank You !</p></b><br />
    <b>Someone Send You Enquiry For Subject: <strong>{{ $maildata->subject}}</strong></b><br />
    <b>Full Name : {{ $maildata->fname }},</b><br />
    <b>Email : <a href="mailto:sales@flairinsights.com?Subject=Flair%20Insight%20Enquiry" target="_top" style="color:#1a1aff;"> {{ $maildata->email }}</a>,</b><br />
    <hr>
    <h3 style="text-align:center">Write us for any queries</h3>
    E-mail: <a href="mailto:sales@flairinsights.com?Subject=Flair%20Insight%20Enquiry" target="_top" style="text-decoration:none; color:#000;">sales@flairinsights.com</a> | Web: <a href="http://www.flairinsights.com/" style="text-decoration:none; color:#000;">www.flairinsights.com</a><br />
</div>

<div style="text-align:center; color:#000;">
Coyright &copy; Flair Insight 5, Kapre Complex, Suncity Road, Anand Nagar, Pune, Maharashtra - 411051<br>
{{ config('app.name') }}
@endcomponent
</div>

</div>