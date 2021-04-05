Hello {{ $mail->receiver }},
This message was send for lab work. HTML version.

Object values:

Demo one: {{ $mail->demo_one }}
Demo two: {{ $mail->demo_two }}

Values passed by With method:

testVarOne: {{ $testVarOne }}
testVarTwo: {{ $testVarTwo }}

Best regards,
{{ $mail->sender}}