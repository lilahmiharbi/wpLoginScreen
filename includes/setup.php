<?php
	class WplsSetup {
		static function install() {
			add_option("wpls_logo", " ");
		}
		
		static function uninstall() {
			delete_option("wpls_logo");
		}
		
	}
