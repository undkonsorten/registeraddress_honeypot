# TYPO3 Extension registeraddress_honeypot

## What does it do?

This extension adds a simple honeypot field to registeraddress  registration form. It can reduce SPAM but won‘t be able to
exclude all bots.

## Installation

Just require via composer:

```shell
composer require undkonsorten/registeraddress-honeypot
```

Activate the extension for TYPO3 versions prior to 11.

We didn't test the extension on non composer installations!

### Configuration

Include the TypoScript to use AdditonalFields Partial in your registeraddress Templates. Use constants to set a new value for the used fieldname of the honeypot field.

Include `EXT:registeraddress_honeypot/Configuration/TypoScript/OverrideRegisteraddressLocalLang/setup.typoscript` to use
predefined error message if someone fills in the `_hp` field. If not, you have to carry on your own to show a proper
error message.
