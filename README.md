# Install WPCLI package for magic link login

## Install the wpcli package

```
wp package install https://github.com/rjeev/wpcli_magic_link.git
```
This will install the wpcli package from github repository

### Activate the magic link plugin through wpcli package

```
wp magicLogin enablePlugin
```
This will install magic link plugin and activate it magically

### Remove magic link plugin through wpcli package

```
wp magiclogin disablePlugin
```

This will disable magic link plugin and delete itself.
