#--------------------------------------------------------------------
# Example Environment Configuration file
#
# This file can be used as a starting point for your own
# custom .env files, and contains most of the possible settings
# available in a default install.
#
# By default, all of the settings are commented out. If you want
# to override the setting, you must un-comment it by removing the '#'
# at the beginning of the line.
#--------------------------------------------------------------------

#--------------------------------------------------------------------
# ENVIRONMENT
#--------------------------------------------------------------------

# CI_ENVIRONMENT = production

#--------------------------------------------------------------------
# APP
#--------------------------------------------------------------------

# app.baseURL = ''
# app.forceGlobalSecureRequests = false

# app.sessionDriver = 'CodeIgniter\Session\Handlers\FileHandler'
# app.sessionCookieName = 'ci_session'
# app.sessionSavePath = NULL
# app.sessionMatchIP = false
# app.sessionTimeToUpdate = 300
# app.sessionRegenerateDestroy = false

# app.cookiePrefix = ''
# app.cookieDomain = ''
# app.cookiePath = '/'
# app.cookieSecure = false
# app.cookieHTTPOnly = false
# app.cookieSameSite = 'Lax'

# app.CSRFProtection  = false
# app.CSRFTokenName   = 'csrf_test_name'
# app.CSRFCookieName  = 'csrf_cookie_name'
# app.CSRFExpire      = 7200
# app.CSRFRegenerate  = true
# app.CSRFExcludeURIs = []
# app.CSRFSameSite    = 'Lax'

# app.CSPEnabled = false

#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------

# database.default.hostname = localhost
# database.default.database = ci4
# database.default.username = root
# database.default.password = root
# database.default.DBDriver = MySQLi

# database.tests.hostname = localhost
# database.tests.database = ci4
# database.tests.username = root
# database.tests.password = root
# database.tests.DBDriver = MySQLi

#--------------------------------------------------------------------
# CONTENT SECURITY POLICY
#--------------------------------------------------------------------

# contentsecuritypolicy.reportOnly = false
# contentsecuritypolicy.defaultSrc = 'none'
# contentsecuritypolicy.scriptSrc = 'self'
# contentsecuritypolicy.styleSrc = 'self'
# contentsecuritypolicy.imageSrc = 'self'
# contentsecuritypolicy.base_uri = null
# contentsecuritypolicy.childSrc = null
# contentsecuritypolicy.connectSrc = 'self'
# contentsecuritypolicy.fontSrc = null
# contentsecuritypolicy.formAction = null
# contentsecuritypolicy.frameAncestors = null
# contentsecuritypolicy.mediaSrc = null
# contentsecuritypolicy.objectSrc = null
# contentsecuritypolicy.pluginTypes = null
# contentsecuritypolicy.reportURI = null
# contentsecuritypolicy.sandbox = false
# contentsecuritypolicy.upgradeInsecureRequests = false

#--------------------------------------------------------------------
# ENCRYPTION
#--------------------------------------------------------------------

# encryption.key =
# encryption.driver = OpenSSL
# encryption.blockSize = 16
# encryption.digest = SHA512

#--------------------------------------------------------------------
# HONEYPOT
#--------------------------------------------------------------------

# honeypot.hidden = 'true'
# honeypot.label = 'Fill This Field'
# honeypot.name = 'honeypot'
# honeypot.template = '<label>{label}</label><input type="text" name="{name}" value=""/>'
# honeypot.container = '<div style="display:none">{template}</div>'

#--------------------------------------------------------------------
# SECURITY
#--------------------------------------------------------------------

# security.tokenName  = 'csrf_token_name'
# security.headerName = 'X-CSRF-TOKEN'
# security.cookieName = 'csrf_cookie_name'
# security.expires    = 7200
# security.regenerate = true
# security.redirect   = true
# security.samesite   = 'Lax'

#--------------------------------------------------------------------
# LOGGER
#--------------------------------------------------------------------

# logger.threshold = 4
