# Pagebased blog extension

This extension is based on the TYPO3 **[pagebased](https://github.com/zeroseven/pagebased#readme)** extension
to create blog post that can be managed in TYPO3 with all the advantages and functions of "normal" pages.

## Quick installation

1. Install the extension by `composer req zeroseven/pagebased-blog`.
2. Create a new page of type "Blog category" (doktype: 146).
3. All pages inside this blog category are automatically treated as a post.
4. Display post properties on all post pages by using the following TypoScript:

```typo3_typoscript
page.16848430146 = USER
page.16848430146 {
  userFunc = Zeroseven\Pagebased\Utility\RenderUtility->renderUserFunc
  file = EXT:pagebased_blog/Resources/Private/Templates/Info.html
  registration = pagebased_blog
}
```

## More information

Check out the [pagebased](https://github.com/zeroseven/pagebased#readme) extension for more information about the [configuration](https://github.com/zeroseven/pagebased#configuration) and usage of this extension.
