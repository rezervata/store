<?php

 echo (isset($_COOKIE['foo']) && $_COOKIE['foo']=='bar') ? 'enabled' : 'disabled';