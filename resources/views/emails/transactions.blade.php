<!-- @component('mail::message') -->
<style>
    *{margin:0;
    padding:0;}
</style>
<div style="color:black">
<a href="http://www.flairinsights.com/"><img src="http://www.flairinsights.com/images/flair-insight-logo.png"></a>
<p>+91-89561 90780</p><br />
<div >
    <p>Thank You !</b>
    <p>Someone Send You Enquiry For:</p>
    <p>Report Name: {{ $maildata->report_id}}</p>
    <P>Full Name : {{ $maildata->fname }},</P>
    <P>Email : <a href="mailto:sales@flairinsights.com?Subject=Flair%20Insight%20Enquiry" target="_top" style=" color:#1a1aff;">{{ $maildata->email }}</a>,</P>
    <P>Phone : {{ $maildata->contact_no}},</P>
    <P>Enquiry Type: {{ $maildata->subject}},</P>
    <P>Company Name : {{ $maildata->company_name }},</P>
    <P>Country : {{ $maildata->country }},</P>
    <P>Requirements : {{ $maildata->requirements }},</P>
    <P>Designation : {{ $maildata->designation }},</P>
    <hr>
    <h2 style="text-align:center">Write us for any queries</h2>
    E-mail: <a href="mailto:sales@flairinsights.com?Subject=Flair%20Insight%20Enquiry" target="_top" style=" color:#1a1aff;">sales@flairinsights.com</a> | Web: <a href="http://www.flairinsights.com/" style=" color:#1a1aff;">www.flairinsights.com</a><br/>
</div>
<p style="text-align:center">
Coyright &copy; Flair Insight 5, Kapre Complex, Suncity Road, Anand Nagar, Pune, Maharashtra - 411051</p>
</div>
{{ config('app.name') }}
<!-- @endcomponent -->

