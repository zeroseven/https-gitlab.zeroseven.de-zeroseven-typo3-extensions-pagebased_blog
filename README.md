# POST-EXTENSION

This extension is based on the **[pagebased](../pagebased/README.md)** extension to create post objects that can be managed in TYPO3 with all the advantages and functions of normal pages

## Quick installation

1. Install the extension by `composer req zeroseven/pagebased-blog`.
2. Adjust the registration setup in [ext_localconf.php](ext_localconf.php) (if you want that).
3. Create a new page of type "Post-Category" (doktype: 146).
4. All pages inside this category page are automatically treated as post objects.
5. Display post properties on all post pages by using the following TypoScript:

```typo3_typoscript
page.16848430146 = USER
page.16848430146 {
  userFunc = Zeroseven\Pagebased\Utility\RenderUtility->renderUserFunc
  file = EXT:pagebased_blog/Resources/Private/Templates/Info.html
  registration = pagebased_blog
}
```

## More information

Check out the **[pagebased](../pagebased/README.md)** extension for more information about the configuration and usage of this extension.
