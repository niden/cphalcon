
extern zend_class_entry *phalcon_forms_element_password_ce;

ZEPHIR_INIT_CLASS(Phalcon_Forms_Element_Password);

PHP_METHOD(Phalcon_Forms_Element_Password, render);

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_forms_element_password_render, 0, 0, IS_STRING, 0)
	ZEND_ARG_ARRAY_INFO(0, attributes, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(phalcon_forms_element_password_method_entry) {
	PHP_ME(Phalcon_Forms_Element_Password, render, arginfo_phalcon_forms_element_password_render, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
