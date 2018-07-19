Run!
---

Run is self destruction plugin for Joomla 2.5 and newer. If you have question "how it's work?" I say you just.
This plugin deleting after his installing. You may be say "why?". And I say - for do it something, for example,
copy file to needly directory and start the test with save log. After those operations this plugin will have deleted 
without anything footprint in Joomla system.

When we are install plugin in Joomla system was calling method `postflight` which execute user method in `_customScript`
and then `_uninstallItself`