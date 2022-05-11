# Form Templates package 
Templates for "symbiotic/form" package. 

Instead of this template package, you can use your own. To use your template package, you need to subscribe to the "\Symbiotic\Form\FormBuilder" event and perform a replacement:

```php
// Global
class MyFormTemplates
{
  public function handle(\Symbiotic\Form\FormBuilder $formBuilder)
  {
     $formBuilder::setTemplatesPackageId('form_templates_package');
  }
}
```

Or:
```php
$global = \Symbiotic\Form\FormBuilder::getTemplatesPackageId();
\Symbiotic\Form\FormBuilder::setTemplatesPackageId('form_templates_package');

/// render form with other templates

\Symbiotic\Form\FormBuilder::setTemplatesPackageId($global);
```

