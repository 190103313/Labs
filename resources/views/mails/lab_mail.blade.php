<p>Hello {{ $mail->receiver }},</p>
<p>This message was send for lab work. HTML version.</p>

<p><u>Object values:</u></p>
<div>
<p><b>Demo one:</b>&nbsp;{{ $mail->demo_one }}</p>
<p><b>Demo two:</b>&nbsp;{{ $mail->demo_two }}</p>
</div>

<p>Values passed by With method:</p>

<div>
<p><b>testVarOne:</b>&nbsp;{{ $testVarOne }}</p>
<p><b>testVarTwo:</b>&nbsp;{{ $testVarTwo }}</p>
</div>

Best regards, <br/>
<p>{{ $mail->sender }}</p> 