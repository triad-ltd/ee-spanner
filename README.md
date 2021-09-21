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

The resulting content in a template will surround the "regular CMS text" with a span tag, applying a class name based on the text within the first pair of @ symbols:


## Result
```
<span class="classname">regular CMS text</span>
```

## Templates

When used in fluid components, the {exp:spanner} tag should be inside a content tag due to parse order.