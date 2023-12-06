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
