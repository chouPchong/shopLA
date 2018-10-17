<?php

return [
    'alipay' => [
        'app_id'         => '2016092200566860',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnN3MYbHA/x+sxHmmYZ4eaeUuHl48tz6xEonl8M/CLH6fndqspk4dhNSZ36QsBVahhvYvppVgN/fscVndf9SVTO+WnpEi4Awk3xMU/brVIti28YYP08PnPH6O5Rj44ZQKJnrFxIJPWkeeC21TSFof2sAcE3GgtrDaafzkXJdimzCrmjm0O7+EvdUy+Z+Uqn7DqtRscNQw9f0V/mFqXUowHQNH8JZyFF/7V5e0Qrajdb+J1hyMHUudtrPvZN1xeOU2AqxecSXJ9EcDzeUF+V1NG8lWQfuxKmh28P5QQP10EkU9eOFmJdD9R3zr6kVN0wsUUYujv2FfgdTjdiy/JDBE5wIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA1NJK5SFQ9oee0LC42hA23shcod4C+bkurYQpChv4E/mTcRKm5Zt41XlC1SyQONqqFyJBfKwmSgWuXNOR3aV7/ihkCbPg07b3yUFUjjZgs7zPljUT9KkMQV3NrT/THISMsSzjSSdIqfJ996QKutRPhc8GSDIKP0jNiX2iZthEKGgrFrcVvbL1RiRZbkCH+77lUrrSw43Yk+FHeHQgbhmMKqUzQxlFAXWfERnkN6WvNF95c8kRer2I0GnQPAdyIpedLGH3Pn07bPif4u3ws9MeTV+QTNEeVXvnJJQ+rVDwRdRSz9wkZEvxaNVsHIUKMcuhPdmLiR6AEeH6avnPjOflXwIDAQABAoIBACEHXf4/dGw+UgR7WMTm/U0H9XBdn0KYXckqGKBsBM08z4gd5+78eP1Qa3HgD6XzMbCTbWxm3y5fwVbAswOeGicwp43l77+LxtriG7hSciGS7PiX1jgDQFaoszHvFNl5LMiWedOxmBJgAvK677tdFdZjccskkPiPWO68o8aoS7OlZlX1Z4b0d0X9cXxrQYPSrHQV0ys6jgQBC6na+Y00N6xgpODWPqbrBOGSbCVXD9pYBuWzlkk4/mHVTWu1rCTHBFC2MLr34RTBSfn59iE8ooF3vStnz2ycOLmhrCcPZ0Swn3wDEHEF/PKRWZ1AdaDCOVDL7heuBy8PjbRbt7nKowECgYEA/H0Ef46XWeAWsfL9BBNQZvvYpoTVp1gs1HYHy6jBPoX4Q12n6CXt/izQ4lnuKI0SV4nB9bAsPBlrUoNB9RUKbve/KYKMFd9iXL4MsUMEcJQsYhQzhugM6XTwSd05tqQ/bkt+/08KRvRaotM7TiqzYANbAJ/Azhc/ndDenfNUQN8CgYEA18gKl69lwDxHaA69KV7zVOqSWofRqGWvrObsAZskLh2u1/KnXUgE4KGnUyt8WO9wvcvcxgsR+gMKFoA8+Oa18/Hfmi7M+gtGTiLxgTQuAJq2oBW0s5TojTtlsTBZtwYWKMlDr92yRn4WQRqFY7O8nEQ0HnDAD7vK1yE7LqRqa4ECgYBFZKbD2BDI5snWBo57fENwym709TUzVQydKANkefECmhdtjGQFbcdHQFH4o/bMtlkALiBcwhqmOeZBO0n5bdr8PKMRaYvOxyJlkuYyIdUqi87W9e5jeYty7mzMID0ocWPtkFpLGRIeBjKS5bM6/IloLgPo2/9FpSYa3bkReDsDyQKBgQCbPsoYLdIoB3ZccFY6IJ0zF/0p8xOtc1N8MzvTP/o8z5BOv78YBsuzjbpjxSKWndZgRv7U4XwSgwNMAwFbFioMk5WLSWah82CmsM9OZOs/9g+0h0lV9qmFixlz7NRvMIra10rCid9MhkSenGUhwVvOledlizszVqnuM3Nv8Ey8gQKBgQCe2MNJWT+f6d+my5AZ1Grdt1zEkTpu7JP4mDY0H9YqC9t23Y711QxmJMhu7gjriywxegBqQqrrI0kZYl8Fk4Pmr0P/S6xSrPkY61zv5Br4lOv8X/S6jP3rIENGz08OX6d8iSlPio6NQ2ATO62k1NsPJDtEAiR9REcJxrQaPGoK4Q==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];