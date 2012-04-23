COMMON_CONF = apache-credit

CREDIT_LOCATION = ~ "^/(?!(administrator|media/editors))"
define CREDIT_STYLE_EXTRA
#mcBodyWrapper #turnkey-credit {
	display: none;
}
endef

include $(FAB_PATH)/common/mk/turnkey/lamp.mk
include $(FAB_PATH)/common/mk/turnkey.mk
