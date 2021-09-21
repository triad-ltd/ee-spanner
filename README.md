# Spanner

## Usage
```
{exp:spanner}
    Text to be processed
{/exp:spanner}
```


CMS text can be surrounded with the following tag:

```
@classname@ regular CMS text @@
```

The spanner tag will surround the "regular CMS text" with a span tag, applying a class name based on the text within the first pair of @ symbols:


## Result
```
<span class="classname">regular CMS text</span>
```