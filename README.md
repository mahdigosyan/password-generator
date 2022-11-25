# Password Generator

The `password-generator.php` script generates a password based on given needs.

## Usage

```bash
php password-generator.php --length=<length>
```

### Password Length (`--length`)

To pass the desired password length, use the `--length` option as shown in the example above.
A valid integer should be used. If an invalid integer is passed (or no length is passed at all),
the default of `12` will be used instead.

## Example
```bash
php password-generator.php --length=32
```

Which would output something similar to:

```
?W@lnAcDgD^hR=vH^EtCms(/1qN_xF)l
```
