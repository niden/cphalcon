
extern zend_class_entry *phalcon_flash_direct_ce;

ZEPHIR_INIT_CLASS(Phalcon_Flash_Direct);

PHP_METHOD(Phalcon_Flash_Direct, message);
PHP_METHOD(Phalcon_Flash_Direct, output);

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_flash_direct_message, 0, 2, IS_STRING, 1)
	ZEND_ARG_TYPE_INFO(0, type, IS_STRING, 0)
	ZEND_ARG_INFO(0, message)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_flash_direct_output, 0, 0, IS_VOID, 0)

	ZEND_ARG_TYPE_INFO(0, remove, _IS_BOOL, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(phalcon_flash_direct_method_entry) {
	PHP_ME(Phalcon_Flash_Direct, message, arginfo_phalcon_flash_direct_message, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Flash_Direct, output, arginfo_phalcon_flash_direct_output, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
