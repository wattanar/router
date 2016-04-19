<?php  

	namespace Gnix;

	class Validator
	{
		
		public function __e($var)
		{
			return filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
		}

		public function isEmail($var)
		{
			return filter_var($var, FILTER_VALIDATE_EMAIL);
		}

		public function isBoolean($var)
		{
			return filter_var($var, FILTER_VALIDATE_BOOLEAN);
		}

		public function isInt($var)
		{
			return filter_var($var, FILTER_VALIDATE_INT);
		}

		public function isFloat($var)
		{
			return filter_var($var, FILTER_VALIDATE_FLOAT);
		}

		public function isIP($var)
		{
			return filter_var($var, FILTER_VALIDATE_IP);
		}

		public function isURL($var)
		{
			return filter_var($var, FILTER_VALIDATE_URL);
		}
	}