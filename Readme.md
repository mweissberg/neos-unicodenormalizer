## Usage

1. Install with `composer require codeq/neos-normalizer`

2. Wrap any object with processor to normalize its output,
e.g. you would probably want to normalize full page output like this:

```
prototype(Page).@process.normalize = CodeQ.UnicodeNormalizer:Normalizer
```
