Run!
---

Run is plugin for Joomla 2.5 and newer. This plugin make self delete after install.

How does it work? There are easy steps:

* You add your "Joomla code" in `_customScript()` method
* Then you install this plugin
* Joomla plugin installer call `postflight()` method. `postflight()` contain two methods `_customScript()` and `_uninstallItself()`
* `_customScript()` execute user's code
* `_uninstallItself()` finding itself and delete all things that belong with this plugin
