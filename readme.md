# NoCaptcha SpamProtecter Module
SpamProtector Module that uses Google's new reCaptcha the field. The 'I am not a robot' checkbox.

## Requirements
* SilverStripe 3.1+
* The SpamProtection Module https://github.com/silverstripe/silverstripe-spamprotection

## Installation
Unzip to your project and add the following to your config.yml
```yaml
---
name: spamprotection
---
FormSpamProtectionExtension:
  default_spam_protector: NoCaptchaProtector
NoCaptchaField:
  PublicKey : '<Your Public Key>'
  PrivateKey: '<Your Private Key>'
```

if you omit the CaptchaAPI it declaration it will default to 'demo' providing you with a smaller subset of questions for testing

## To Do
* Enable more robust PHP validation
* Unit Test (if I get around to learning them)