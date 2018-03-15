<?php namespace JF;
/**

Copyright 2018 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-bb6df6
Date:    2018-03-15 10:59:56
Version: v2.1.0
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-bb6df6",
    "email": {
        "to": "",
        "cc": "",
        "bcc": "",
        "subject": "",
        "template": ""
    },
    "admin": {
        "users": "admin:903d8",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "",
        "message": "",
        "seconds": "10"
    },
    "autoResponse": {
        "includeAttachments": true,
        "subject": "",
        "template": ""
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "aero"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "Your Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f1",
            "cid": "c1"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "id": "f2",
            "cid": "c2"
        },
        {
            "label": "Phone",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f5",
            "cid": "c30"
        },
        {
            "label": "Untitled",
            "field_type": "creditcard",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                }
            },
            "labelHide": true,
            "subfields": {
                "ccNumber": {
                    "order": 1,
                    "label": "Card number",
                    "field_options": {
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "Invalid credit card number"
                            }
                        }
                    },
                    "id": "ccNumber"
                },
                "ccFullname": {
                    "order": 2,
                    "label": "Name on card",
                    "field_options": {
                        "validators": {
                            "required": {
                                "enabled": false
                            }
                        }
                    },
                    "id": "ccFullname"
                },
                "ccExpiryDate": {
                    "order": 3,
                    "label": "Expiration date",
                    "field_options": {
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "Invalid expiration date"
                            }
                        }
                    },
                    "id": "ccExpiryDate"
                },
                "ccCVC": {
                    "order": 4,
                    "label": "Card CVC",
                    "field_options": {
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "Invalid CVC code"
                            }
                        }
                    },
                    "id": "ccCVC"
                }
            },
            "id": "f7",
            "cid": "c40"
        },
        {
            "label": "Payment",
            "field_type": "payment",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "numSpinner": {
                    "enabled": false
                },
                "addon": {
                    "leftText": "USD $"
                },
                "validators": {
                    "required": {
                        "enabled": true
                    },
                    "number": {
                        "enabled": true
                    }
                }
            },
            "payment": {
                "amount": 9.99,
                "amountText": "USD ${amount}",
                "amountFontSize": "x-large",
                "changeable": false,
                "currency": "USD"
            },
            "payments": {
                "method": "paypal",
                "stripe": {
                    "ccFullname": {
                        "label": "Name on card"
                    },
                    "ccCard": {
                        "label": "Credit card"
                    },
                    "isLive": false,
                    "showPostalCode": false,
                    "showNameOnCard": false,
                    "columnLabels": {
                        "paymentId": "Payment ID",
                        "amount": "Amount",
                        "currency": "Currency",
                        "description": "Description"
                    },
                    "sk_test": "sk_test_gtmcG1vT7sjS94Lb7KToKlIk",
                    "pk_test": "pk_test_fzHomSDuimszjnuYL5uX4xu6",
                    "sk_live": "",
                    "pk_live": "",
                    "showLogo": true,
                    "logoUrl": "https:\/\/stripe.com\/img\/about\/logos\/badge\/solid-dark.svg"
                },
                "paypal": {
                    "isLive": true,
                    "email": "",
                    "ipn": {
                        "notify_url": "",
                        "emailToMerchant": false,
                        "subject": "",
                        "template": "",
                        "emailToBuyer": false,
                        "buyerSubject": "",
                        "buyerTemplate": ""
                    },
                    "variables": "",
                    "showLogo": true,
                    "logoUrl": "https:\/\/www.paypalobjects.com\/webstatic\/en_US\/i\/btn\/png\/silver-rect-paypalcheckout-26px.png"
                },
                "braintree": {
                    "ccFullname": {
                        "label": "Name on card"
                    },
                    "isLive": false,
                    "showNameOnCard": false,
                    "columnLabels": {
                        "paymentId": "Payment ID",
                        "transactionId": "Transaction ID",
                        "amount": "Amount",
                        "description": "Description"
                    },
                    "merchantID": "c934q9rmvbx8sz2p",
                    "sk_test": "b389fba2f9821012c4418346150430cc",
                    "pk_test": "9pcbhjmfhds2rb84",
                    "sk_live": "",
                    "pk_live": "",
                    "showLogo": true,
                    "logoUrl": "https:\/\/www.paypalobjects.com\/webstatic\/en_US\/i\/btn\/png\/silver-rect-paypal-26px.png"
                }
            },
            "id": "f6",
            "cid": "c35"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ],
    "licenseKey": ""
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class