---
title: API Reference

language_tabs:
- bash
- javascript
- php
- python

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://genckart.gaziantep.bel.tr/docs/collection.json)

<!-- END_INFO -->

#Campaign


Kampanya Api Listesi
<!-- START_e633d8d94456c107cf16ee6707cf43ac -->
## Campaign list

[Kampanya listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/campaign" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/campaign"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/campaign',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/campaign'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 4,
            "title": "Şok  edecek fiyatlar",
            "offer_title": "Haftanın Fırsatları",
            "summary": "%30 inidirim",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/campaign\/899cb807dbcd269cb42e72bc442ab301.jpg",
            "positions": {
                "latitude": 37.059263,
                "longitude": 37.358065
            },
            "type": {
                "unique": 1,
                "name": "Genel",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "is_favorite": true,
            "published": "2021-09-09T08:43:00.000000Z"
        },
        {
            "unique": 3,
            "title": "Primemalda İndirim",
            "offer_title": "Çikolata Severleri Sevindirecek İndirim Geldi.",
            "summary": "%40 indirim",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/campaign\/a00676f21fe8baecab7b25d0b2f4ed71.jpg",
            "positions": {
                "latitude": 37.060205,
                "longitude": 37.340126
            },
            "type": {
                "unique": 2,
                "name": "Market",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "is_favorite": true,
            "published": "2021-09-09T04:49:00.000000Z"
        },
        {
            "unique": 2,
            "title": "Kitaplarda İndirim",
            "offer_title": "2.ye %50",
            "summary": "Kaçırılmayacak Fırsat.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/campaign\/4cd68955282366959b5f400f7550c19c.jpg",
            "positions": {
                "latitude": 37.058037,
                "longitude": 37.331414
            },
            "type": {
                "unique": 2,
                "name": "Market",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "is_favorite": false,
            "published": "2021-09-09T04:44:00.000000Z"
        },
        {
            "unique": 1,
            "title": "ŞOK ŞOK ŞOK!",
            "offer_title": "KURU ET, FÜME ET, SOSİS ve Peynir ÜRÜNLERİNDE PAKET İNDİRİMLERİ BAŞLADI",
            "summary": "Et ve Süt Ürünlerinde %50 İndirim",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/campaign\/9ef4ce59ebcc882ed7f0bb6d6360d387.jpg",
            "positions": {
                "latitude": 37.063992,
                "longitude": 37.361927
            },
            "type": {
                "unique": 2,
                "name": "Market",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "is_favorite": false,
            "published": "2021-09-09T04:40:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/campaign`


<!-- END_e633d8d94456c107cf16ee6707cf43ac -->

<!-- START_53773a4d8fd8368a152e6a1830463af1 -->
## Campaign detail

[Kampanya detayı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/campaign/detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/campaign/detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/campaign/detail',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/campaign/detail'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/campaign/detail`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Campaign id
    
<!-- END_53773a4d8fd8368a152e6a1830463af1 -->

<!-- START_4a22a781b5e623cea4411d08b7cb696f -->
## Campaign types

[Kampanya kategori tipleri]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/campaign/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/campaign/types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/campaign/types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/campaign/types'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 1,
            "name": "Genel",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        },
        {
            "unique": 2,
            "name": "Market",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        }
    ]
}
```

### HTTP Request
`GET api/campaign/types`


<!-- END_4a22a781b5e623cea4411d08b7cb696f -->

<!-- START_c3843902b8257308a949b9164f54e7d8 -->
## Campaign favorites

[Kampanya favori ekleme/çıkarma]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/campaign/favorite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/campaign/favorite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/campaign/favorite',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/campaign/favorite'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/campaign/favorite`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Campaign id
    
<!-- END_c3843902b8257308a949b9164f54e7d8 -->

<!-- START_f324f0b04de2b162b97570106b46d01e -->
## Campaign coupon join

[Kampanya kupon kodu talebi]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/campaign/join" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/campaign/join"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/campaign/join',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/campaign/join'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/campaign/join`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Campaign id
    
<!-- END_f324f0b04de2b162b97570106b46d01e -->

#Company


Firma Api Listesi
<!-- START_c6a2542e6f559a7fbbee119164fba6c4 -->
## Company list

[Firma listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/company" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/company"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/company',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/company'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": []
}
```

### HTTP Request
`GET api/company`


<!-- END_c6a2542e6f559a7fbbee119164fba6c4 -->

<!-- START_840946c0588fba6e8611b3da3f70283b -->
## Company detail

[Firma detayı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/company/detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/company/detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/company/detail',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/company/detail'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/company/detail`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Company id
    
<!-- END_840946c0588fba6e8611b3da3f70283b -->

#Event


Etkinlik Api Listesi
<!-- START_cd8754c0a4632c61c3a037e77679ce53 -->
## Event list

[Etkinlik listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/event" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/event"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/event',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/event'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 6,
            "title": "GAZİANTEP'İN DÜŞMAN İŞGALİNDEN KURTULUŞUNUN 99. YIL DÖNÜMÜ KUTLANDI",
            "summary": "Gaziantep’in Düşman İşgalinden Kurtuluşunun 99. Yıl Dönümü dolayısıyla tören düzenlendi.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/44c518ce3aeb878e44cf73709b2893db.jpg",
            "address": null,
            "positions": {
                "latitude": 37.058759,
                "longitude": 37.347937
            },
            "type": {
                "unique": 3,
                "name": "Kültürel",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "date": {
                "start": null,
                "end": null
            },
            "point": 0,
            "viewed": 0,
            "is_favorite": true,
            "is_register": false,
            "is_join": false,
            "published": "2021-09-09T04:33:00.000000Z"
        },
        {
            "unique": 5,
            "title": "25 ARALIK PANORAMA MÜZESİ ZİYARETE AÇILDI",
            "summary": "Gaziantep Büyükşehir Belediyesi tarafından yapılan, Antep Savunması’nın her anını gözler önüne seren ‘25 Aralık Gaziantep Savunması Kahramanlık Panoraması ve Müzesi’ ziyarete açıldı.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/eaf0764bee72941c449a76dbe5e11df0.jpg",
            "address": null,
            "positions": {
                "latitude": 37.061657,
                "longitude": 37.336204
            },
            "type": {
                "unique": 3,
                "name": "Kültürel",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "date": {
                "start": null,
                "end": null
            },
            "point": 0,
            "viewed": 0,
            "is_favorite": false,
            "is_register": false,
            "is_join": false,
            "published": "2021-09-09T04:28:00.000000Z"
        },
        {
            "unique": 4,
            "title": "Anadolu Bilişim Buluşmaları",
            "summary": "Bilişimin kalbi Güneydoğu'nun incisinde atacak. Gaziantep Üniversitesi, ICT MEDIA ve Harput Ajans sektörün uzmanlarını 8-9 Mart 2018'de Gaziantep'te buluşturuyor.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/87bce76a97e788c763e387e06da71772.jpg",
            "address": null,
            "positions": {
                "latitude": 37.060232,
                "longitude": 37.342701
            },
            "type": {
                "unique": 2,
                "name": "Yarışma",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/5bf02bfa6bc5fad47090f987bd2acbc4.jpg"
            },
            "date": {
                "start": null,
                "end": null
            },
            "point": 0,
            "viewed": 0,
            "is_favorite": true,
            "is_register": false,
            "is_join": false,
            "published": "2021-09-09T04:26:00.000000Z"
        },
        {
            "unique": 3,
            "title": "8 ŞUBAT GAZİANTEP’E GAZİLİK UNVANININ VERİLİŞİNİN 100.YILI ANKARA’DA KUTLANDI",
            "summary": "TBMM himayelerinde Gaziantep Büyükşehir Belediyesi ve Gaziantep Valiliği iş birliğinde 8 Şubat 1921’de Antep’e “Gazilik” unvanının verilişinin 100’üncü yılı Ankara’da organize edilen özel bir etkinlikle kutlandı.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/4552d4dacee2144fb7629cd355c8c523.jpg",
            "address": null,
            "positions": {
                "latitude": 37.049779,
                "longitude": 37.351971
            },
            "type": {
                "unique": 3,
                "name": "Kültürel",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "date": {
                "start": null,
                "end": null
            },
            "point": 50,
            "viewed": 0,
            "is_favorite": true,
            "is_register": false,
            "is_join": false,
            "published": "2021-09-09T04:25:00.000000Z"
        },
        {
            "unique": 2,
            "title": "Şühedaya Mektup ve Anı Yazma Yarışması",
            "summary": "Mektup ve Anı Yazma Yarışması",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/02f27a72c44a484cee0a1ec2cfb1da5e.jpg",
            "address": null,
            "positions": {
                "latitude": 37.066218,
                "longitude": 37.373658
            },
            "type": {
                "unique": 2,
                "name": "Yarışma",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/5bf02bfa6bc5fad47090f987bd2acbc4.jpg"
            },
            "date": {
                "start": null,
                "end": null
            },
            "point": 0,
            "viewed": 0,
            "is_favorite": true,
            "is_register": false,
            "is_join": false,
            "published": "2021-09-09T03:35:00.000000Z"
        },
        {
            "unique": 1,
            "title": "Komposizyon Yarışması",
            "summary": "Komposizyon Yarışması",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/183a151eafd713af117e66d6b4e7b2d6.jpg",
            "address": null,
            "positions": {
                "latitude": 37.066355,
                "longitude": 37.373583
            },
            "type": {
                "unique": 1,
                "name": "Genel",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "date": {
                "start": null,
                "end": null
            },
            "point": 0,
            "viewed": 0,
            "is_favorite": true,
            "is_register": false,
            "is_join": false,
            "published": "2021-09-09T03:25:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/event`


<!-- END_cd8754c0a4632c61c3a037e77679ce53 -->

<!-- START_423cfebfda5f6d89a3cb5497c29f6865 -->
## Event detail

[Etkinlik detayı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/event/detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/event/detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/event/detail',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/event/detail'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/event/detail`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Event id
    
<!-- END_423cfebfda5f6d89a3cb5497c29f6865 -->

<!-- START_a79ef1013fbfd2f2e4c16adae87bffa8 -->
## Event types

[Etkinlik kategori tipleri]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/event/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/event/types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/event/types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/event/types'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 1,
            "name": "Genel",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        },
        {
            "unique": 2,
            "name": "Yarışma",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/5bf02bfa6bc5fad47090f987bd2acbc4.jpg"
        },
        {
            "unique": 3,
            "name": "Kültürel",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        },
        {
            "unique": 4,
            "name": "Gezi",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        },
        {
            "unique": 5,
            "name": "Toplantı",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        },
        {
            "unique": 6,
            "name": "Tur",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        }
    ]
}
```

### HTTP Request
`GET api/event/types`


<!-- END_a79ef1013fbfd2f2e4c16adae87bffa8 -->

<!-- START_ac97ee9bd60089a708697bd2702eece0 -->
## Event favorites

[Etkinlik favori ekleme/çıkarma]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/event/favorite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/event/favorite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/event/favorite',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/event/favorite'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/event/favorite`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Event id
    
<!-- END_ac97ee9bd60089a708697bd2702eece0 -->

<!-- START_dc58c4ffc45000cbf1dbe47706b865c7 -->
## Event register

[Etkinlik kayıt talebi]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/event/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1,"include":false}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/event/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1,
    "include": false
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/event/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
            'include' => false,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/event/register'
payload = {
    "unique": 1,
    "include": false
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/event/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Event id
        `include` | boolean |  required  | Event join parameter
    
<!-- END_dc58c4ffc45000cbf1dbe47706b865c7 -->

<!-- START_7eea5bdeb78c77d16551a334388b0193 -->
## Event join

[Etkinlik bildirim talebi]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/event/join" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1,"latitude":37.065952,"longitude":37.378109}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/event/join"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1,
    "latitude": 37.065952,
    "longitude": 37.378109
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/event/join',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
            'latitude' => 37.065952,
            'longitude' => 37.378109,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/event/join'
payload = {
    "unique": 1,
    "latitude": 37.065952,
    "longitude": 37.378109
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/event/join`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Event id.
        `latitude` | float |  required  | Location latitude.
        `longitude` | float |  required  | Location longitude.
    
<!-- END_7eea5bdeb78c77d16551a334388b0193 -->

<!-- START_64fcfcd90ffb66b1ab220f76ef0d90c7 -->
## Event user location

[Etkinlik kullanıcı konum incelemesi]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/event/location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"latitude":37.065952,"longitude":37.378109}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/event/location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "latitude": 37.065952,
    "longitude": 37.378109
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/event/location',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'latitude' => 37.065952,
            'longitude' => 37.378109,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/event/location'
payload = {
    "latitude": 37.065952,
    "longitude": 37.378109
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/event/location`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `latitude` | float |  required  | Location latitude.
        `longitude` | float |  required  | Location longitude.
    
<!-- END_64fcfcd90ffb66b1ab220f76ef0d90c7 -->

<!-- START_f8f450f8921ebcf43e609c696ddb7f96 -->
## Event direct join

[Etkinlik hızlı katılım bildirim talebi]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/event/direct_join" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1,"latitude":37.065952,"longitude":37.378109}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/event/direct_join"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1,
    "latitude": 37.065952,
    "longitude": 37.378109
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/event/direct_join',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
            'latitude' => 37.065952,
            'longitude' => 37.378109,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/event/direct_join'
payload = {
    "unique": 1,
    "latitude": 37.065952,
    "longitude": 37.378109
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/event/direct_join`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Event id.
        `latitude` | float |  required  | Location latitude.
        `longitude` | float |  required  | Location longitude.
    
<!-- END_f8f450f8921ebcf43e609c696ddb7f96 -->

#Gift


Hediye Api Listesi
<!-- START_2b715e5d16e270e1c56757ef26b05ea9 -->
## Gift list

[Hediye listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/gift" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/gift"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/gift',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/gift'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": []
}
```

### HTTP Request
`GET api/gift`


<!-- END_2b715e5d16e270e1c56757ef26b05ea9 -->

<!-- START_522981b49d92919f86b0aa250554a5d2 -->
## Gift detail

[Hediye detayı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/gift/detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/gift/detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/gift/detail',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/gift/detail'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/gift/detail`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Gift id
    
<!-- END_522981b49d92919f86b0aa250554a5d2 -->

<!-- START_20feba074ea9172cb1bb2e56ec9b4984 -->
## System point list

[Sistemdeki puan sıralaması]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/gift/points" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/gift/points"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/gift/points',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/gift/points'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST api/gift/points`


<!-- END_20feba074ea9172cb1bb2e56ec9b4984 -->

#News


Haberler Api Listesi
<!-- START_5dd1068d84cb8b472b4e1b34928a56af -->
## News list

[Haber listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/news',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/news'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 8,
            "title": "BAŞKAN ŞAHİN, KIRSAL MAHALLELERDE YENİLENEN YOL ÇALIŞMALARINI İNCELEDİ",
            "summary": "ŞAHİN: HER TÜRLÜ SIKINTINIZI CAN KULAĞIYLA DİNLEMEK İÇİN HAZIRIZ",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/14d89f799a0490e10f3861ad9d1f9ad9.jpeg",
            "type": {
                "unique": 5,
                "name": "Çevre Çalışmaları",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "published": "2021-09-09T04:23:00.000000Z"
        },
        {
            "unique": 7,
            "title": "ENTECH – ÇEVRE TEKNOLOJİLERİ, GERİ DÖNÜŞÜM VE SIFIR ATIK FUARI’NIN RESMİ AÇILIŞ TÖRENİ GERÇEKLEŞTİ",
            "summary": "ŞAHİN: YENİ DÜNYANIN ANAHTAR KODLARIYLA ANADOLU’NUN REKABET GÜCÜNÜ ARTIRACAĞIZ",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/8bf9bfa6cc9306e77a504b3dbb49dd96.jpg",
            "type": {
                "unique": 5,
                "name": "Çevre Çalışmaları",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "published": "2021-09-09T04:19:00.000000Z"
        },
        {
            "unique": 6,
            "title": "İLKOKUL 1’İNCİ SINIF ÖĞRENCİLERİN ÇANTALARI BÜYÜKŞEHİR’DEN!",
            "summary": "Gaziantep Büyükşehir Belediyesi, 2021-2022 Eğitim Öğretim Yılı’nda Gaziantep’te okula başlayacak bütün ilkokul 1’inci sınıf öğrencilerinin okul çantası ve kırtasiye ihtiyaçlarını karşılayacak.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/c96aaf5cf31bad3728245b9a376aed0b.jpg",
            "type": {
                "unique": 2,
                "name": "Çocuklara Yönelik Çalışmalar",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/9f4376548eba1dbc8de5d2f98e1a6b96.jpeg"
            },
            "viewed": 0,
            "published": "2021-09-09T04:16:00.000000Z"
        },
        {
            "unique": 5,
            "title": "BÜYÜKŞEHİR GAZİANTEP ÜNİVERSİTESİ KAMPÜSÜNE 3 YENİ KAPI KAZANDIRDI",
            "summary": "BÜYÜKŞEHİR GAZİANTEP ÜNİVERSİTESİ KAMPÜSÜNE 3 YENİ KAPI KAZANDIRDI",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/65817237e664ede45dac991f029ca42a.jpg",
            "type": {
                "unique": 4,
                "name": "Gençlere Yönelik",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/2b8d3657a2ef51306ce380d874d816ce.jpeg"
            },
            "viewed": 0,
            "published": "2021-09-09T04:15:00.000000Z"
        },
        {
            "unique": 4,
            "title": "BAŞKAN ŞAHİN İLK DERS GÜNÜNDE ÖĞRENCİLERİN HEYECANINA ORTAK OLDU",
            "summary": "Gaziantep Büyükşehir Belediye Başkanı Fatma Şahin, 2021-2022 Eğitim Öğretim Yılı’nın ilk ders gününde öğrencilerin heyecanına ortak oldu.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/e09829c4abb47db833f6546cb310f59e.jpg",
            "type": {
                "unique": 2,
                "name": "Çocuklara Yönelik Çalışmalar",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/9f4376548eba1dbc8de5d2f98e1a6b96.jpeg"
            },
            "viewed": 0,
            "published": "2021-09-09T04:08:00.000000Z"
        },
        {
            "unique": 3,
            "title": "BAŞKAN ŞAHİN’DEN TURAN EMEKSİZ VE ONUR MAHALLELERİNE ZİYARET",
            "summary": "Gaziantep Büyükşehir Belediye Başkanı Fatma Şahin, vatandaş odaklı yönetim anlayışını güçlendirmek amacıyla Turanemeksiz ve Onur mahallelerinde ikamet eden halkla ve mahalle muhtarlarıyla bir araya geldi, esnafın ve vatandaşın sıkıntılarını dinledi.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/e8eda8307a15e5fc4c64cdf4df76b7b6.jpg",
            "type": {
                "unique": 3,
                "name": "Ziyaretler",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "published": "2021-09-09T04:07:00.000000Z"
        },
        {
            "unique": 2,
            "title": "EKOLOJİK BİNADA ÇEVRE BİLİNCİ VE EKOLOJİK YAŞAM EĞİTİMLERİ SÜRÜYOR",
            "summary": "Gaziantep Büyükşehir Belediyesi tarafından 2014 yılından bu yana faaliyet gösteren Ekolojik Bina, “Yaz Çocuk Atölyeleri” kapsamında 7-14 yaş grubu çocuklara ekolojiyi öğrenme imkanı sunmak amacıyla hazırladığı bireysel etkinlikler ve atölye çalışmalarını tamamladı.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/5becb84faca5d4c5f75f0afbb0c2323b.jpg",
            "type": {
                "unique": 2,
                "name": "Çocuklara Yönelik Çalışmalar",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/9f4376548eba1dbc8de5d2f98e1a6b96.jpeg"
            },
            "viewed": 0,
            "published": "2021-09-09T04:04:00.000000Z"
        },
        {
            "unique": 1,
            "title": "BÜYÜKŞEHİR, MUSEM AKADEMİ İLE GASTRONOMİ PROFESYONELLERİ YETİŞTİRECEK",
            "summary": "Profesyonel Aşçılık Eğitimi Verilecek",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/8789f869e642b8172f8fa94fc87d2aea.jpg",
            "type": {
                "unique": 1,
                "name": "Mutfak Sanatları",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/493ebb355d371b228d78a758203dd6a4.jpg"
            },
            "viewed": 0,
            "published": "2021-09-09T03:55:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/news`


<!-- END_5dd1068d84cb8b472b4e1b34928a56af -->

<!-- START_f1e3bbff2618067a0424e0fddf431755 -->
## News detail

[Haber detayı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/news/detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/news/detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/news/detail',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/news/detail'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/news/detail`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | News id
    
<!-- END_f1e3bbff2618067a0424e0fddf431755 -->

<!-- START_e762046d8f6b636f85fe4567c3c48f27 -->
## News types

[Haber kategori tipleri]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/news/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/news/types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/news/types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/news/types'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 1,
            "name": "Mutfak Sanatları",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/493ebb355d371b228d78a758203dd6a4.jpg"
        },
        {
            "unique": 2,
            "name": "Çocuklara Yönelik Çalışmalar",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/9f4376548eba1dbc8de5d2f98e1a6b96.jpeg"
        },
        {
            "unique": 3,
            "name": "Ziyaretler",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        },
        {
            "unique": 4,
            "name": "Gençlere Yönelik",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/news\/2b8d3657a2ef51306ce380d874d816ce.jpeg"
        },
        {
            "unique": 5,
            "name": "Çevre Çalışmaları",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        }
    ]
}
```

### HTTP Request
`GET api/news/types`


<!-- END_e762046d8f6b636f85fe4567c3c48f27 -->

#Place


Mekanlar Api Listesi
<!-- START_0f64addca19a3cc22ca349a9ef6d3a15 -->
## Place list

[Mekan listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/place" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/place"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/place',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/place'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 3,
            "title": "Özel Sada Hastanesi",
            "summary": "Sada Hastanesi",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/place\/2ac09a87b3cb1b5c9a9e3f8b9271dcdd.jpg",
            "address": null,
            "positions": {
                "latitude": 37.103658,
                "longitude": 37.420876
            },
            "type": {
                "unique": 2,
                "name": "Hastaneler",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "published": "2021-09-10T03:55:00.000000Z"
        },
        {
            "unique": 2,
            "title": "Primemal Avm",
            "summary": "Primemal Avm",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/place\/28a95dabad970585f11fd1c0b4b3955d.jpg",
            "address": null,
            "positions": {
                "latitude": 37.053006,
                "longitude": 37.378621
            },
            "type": {
                "unique": 1,
                "name": "Tesisler",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "published": "2021-09-09T11:00:00.000000Z"
        },
        {
            "unique": 1,
            "title": "Rum Kale",
            "summary": "Şahinbey Belediyemiz Şahintepe Mahallesi’ne yaptırdığı Şahintepe Sosyal Tesisi’nin çalışmalarını tamamlayarak vatandaşın kullanımına sundu.",
            "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/place\/85d45dae421c8e10b3f174cf29a3e079.jpg",
            "address": null,
            "positions": {
                "latitude": 37.059876,
                "longitude": 37.340727
            },
            "type": {
                "unique": 1,
                "name": "Tesisler",
                "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
            },
            "viewed": 0,
            "published": "2021-09-09T05:03:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/place`


<!-- END_0f64addca19a3cc22ca349a9ef6d3a15 -->

<!-- START_1645267d01ed420f8391d95d0c63202c -->
## Place detail

[Mekan detayı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/place/detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"unique":1}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/place/detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "unique": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/place/detail',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'unique' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/place/detail'
payload = {
    "unique": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/place/detail`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `unique` | integer |  required  | Place id.
    
<!-- END_1645267d01ed420f8391d95d0c63202c -->

<!-- START_c9de6aa7924bb92e4ae2d9bfe74f705f -->
## Place types

[Mekan kategori tipleri]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/place/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/place/types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/place/types',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/place/types'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 1,
            "name": "Tesisler",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        },
        {
            "unique": 2,
            "name": "Hastaneler",
            "icon": "http:\/\/genckart.gaziantep.bel.tr\/upload\/default_icon.png"
        }
    ]
}
```

### HTTP Request
`GET api/place/types`


<!-- END_c9de6aa7924bb92e4ae2d9bfe74f705f -->

#User


Kullanıcı Api İşlevleri
<!-- START_638687f1aca2f1e69b360d1516c7c1f9 -->
## User register

[Yeni kullanıcı kaydı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/user/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"name":"\u0130smail","surname":"\u00dcnal","tc":"18851855544","phone":"5347090512","gender":1,"birthday":"11.07.1993","referrer":"5347090512","email":"ismailunal@gaziantep.bel.tr","password":"123"}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "name": "\u0130smail",
    "surname": "\u00dcnal",
    "tc": "18851855544",
    "phone": "5347090512",
    "gender": 1,
    "birthday": "11.07.1993",
    "referrer": "5347090512",
    "email": "ismailunal@gaziantep.bel.tr",
    "password": "123"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/user/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'name' => 'İsmail',
            'surname' => 'Ünal',
            'tc' => '18851855544',
            'phone' => '5347090512',
            'gender' => 1,
            'birthday' => '11.07.1993',
            'referrer' => '5347090512',
            'email' => 'ismailunal@gaziantep.bel.tr',
            'password' => '123',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/register'
payload = {
    "name": "\u0130smail",
    "surname": "\u00dcnal",
    "tc": "18851855544",
    "phone": "5347090512",
    "gender": 1,
    "birthday": "11.07.1993",
    "referrer": "5347090512",
    "email": "ismailunal@gaziantep.bel.tr",
    "password": "123"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/user/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | Name
        `surname` | string |  required  | Surname
        `tc` | string |  required  | TC Kimlik Numarası
        `phone` | string |  required  | Mobile Phone
        `gender` | integer |  required  | Gender
        `birthday` | date |  required  | Birthday
        `referrer` | string |  required  | Referrer Phone
        `email` | string |  required  | E-Mail
        `password` | string |  required  | Password
    
<!-- END_638687f1aca2f1e69b360d1516c7c1f9 -->

<!-- START_57e3b4272508c324659e49ba5758c70f -->
## User login

[Kullanıcı kaydı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/user/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"email":"ismailunal@gaziantep.bel.tr","password":"123"}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "email": "ismailunal@gaziantep.bel.tr",
    "password": "123"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/user/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'email' => 'ismailunal@gaziantep.bel.tr',
            'password' => '123',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/login'
payload = {
    "email": "ismailunal@gaziantep.bel.tr",
    "password": "123"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/user/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | E-Mail.
        `password` | string |  required  | Password.
    
<!-- END_57e3b4272508c324659e49ba5758c70f -->

<!-- START_ce7af384a8eb198ec28d752586f4ff17 -->
## User logout

[Kullanıcı çıkışı]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/user/logout',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST api/user/logout`


<!-- END_ce7af384a8eb198ec28d752586f4ff17 -->

<!-- START_620850c465af22ca6af39467c32bc51e -->
## Forgot password

[Parolamı unuttum]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/user/forgot" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"email":"ismailunal@gaziantep.bel.tr"}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/forgot"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "email": "ismailunal@gaziantep.bel.tr"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/user/forgot',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'email' => 'ismailunal@gaziantep.bel.tr',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/forgot'
payload = {
    "email": "ismailunal@gaziantep.bel.tr"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/user/forgot`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | E-Mail
    
<!-- END_620850c465af22ca6af39467c32bc51e -->

<!-- START_a4251b7143964e3f7d9fb181a7b86ba5 -->
## Profile get

[Profil bilgilerini getirme]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/user/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/user/profile',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/profile'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": {
        "unique": 1,
        "name": "Ali",
        "surname": "AK",
        "tc": "18851855542",
        "phone": "4324234324242",
        "email": "test@test.com",
        "birthday": "1993-07-10T21:00:00.000000Z",
        "gender": 1,
        "photo": "http:\/\/genckart.gaziantep.bel.tr\/upload\/user\/default.png",
        "point": 10,
        "created": "2021-09-09T02:57:13.000000Z"
    }
}
```

### HTTP Request
`GET api/user/profile`


<!-- END_a4251b7143964e3f7d9fb181a7b86ba5 -->

<!-- START_1e0c3bb3e26bb161b8fd6f43935f4a57 -->
## Profile info change

[Profil bilgilerini değiştirme]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/user/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"phone":"5347090512","photo":"delectus"}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "phone": "5347090512",
    "photo": "delectus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/user/profile',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'phone' => '5347090512',
            'photo' => 'delectus',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/profile'
payload = {
    "phone": "5347090512",
    "photo": "delectus"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/user/profile`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `phone` | string |  required  | Mobile phone
        `photo` | file |  required  | Profile photo
    
<!-- END_1e0c3bb3e26bb161b8fd6f43935f4a57 -->

<!-- START_a5473f4af51f464841feb01b43fe1c0d -->
## Password change

[Parola değiştirme]

> Example request:

```bash
curl -X POST \
    "http://genckart.gaziantep.bel.tr/api/user/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY" \
    -d '{"new_password":"123","old_password":"324"}'

```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

let body = {
    "new_password": "123",
    "old_password": "324"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://genckart.gaziantep.bel.tr/api/user/password',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
        'json' => [
            'new_password' => '123',
            'old_password' => '324',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/password'
payload = {
    "new_password": "123",
    "old_password": "324"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/user/password`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `new_password` | string |  required  | New password
        `old_password` | string |  required  | Old password
    
<!-- END_a5473f4af51f464841feb01b43fe1c0d -->

<!-- START_0b714276c2e5e68d96c8ede34405fc24 -->
## Notification list

[Bildirimlerim listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/user/notifications" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/notifications"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/user/notifications',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/notifications'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "unique": 11,
            "title": "test bildirimi",
            "message": "test bildirimi",
            "sended": "2021-09-15T07:59:00.000000Z"
        },
        {
            "unique": 10,
            "title": "test",
            "message": "test",
            "sended": "2021-09-15T07:59:00.000000Z"
        },
        {
            "unique": 9,
            "title": "13\/09\/2021      13.58.20",
            "message": "selam",
            "sended": "2021-09-13T07:59:00.000000Z"
        },
        {
            "unique": 8,
            "title": "bayram mesajı",
            "message": "seyidi abime ve ramazan abime sevgi ve saygılarımı iletiyorum",
            "sended": "2021-09-13T07:59:00.000000Z"
        },
        {
            "unique": 7,
            "title": "09,09,2021",
            "message": "den selamlar",
            "sended": "2021-09-09T12:59:00.000000Z"
        },
        {
            "unique": 6,
            "title": "Gb Pos vatandaş Uygulamasını test Etme",
            "message": "svxcvxcv",
            "sended": "2021-09-09T11:59:00.000000Z"
        },
        {
            "unique": 5,
            "title": "Gb Pos vatandaş Uygulamasını test Etme",
            "message": "vxcvxcv",
            "sended": "2021-09-09T11:59:00.000000Z"
        },
        {
            "unique": 4,
            "title": "Gb Pos vatandaş Uygulamasını test Etme",
            "message": "selam",
            "sended": "2021-09-09T11:59:00.000000Z"
        },
        {
            "unique": 3,
            "title": "merhaba kullanııcı",
            "message": "Gördüğüme göre bugun gelmemişsin ziyaret etmeni tavsiye ederim",
            "sended": "2021-09-09T09:59:00.000000Z"
        },
        {
            "unique": 2,
            "title": "BÜYÜKŞEHİR, MUSEM AKADEMİ İLE GASTRONOMİ PROFESYONELLERİ YETİŞTİRECEK",
            "message": "İnanıllmaz olay!\r\nPişirilen ve yenmek üzere olan tavuk canlandı ve etrafındakilere korku dolu anlar yaşattı...\r\nhaberin devamı için uygulamayı ziyaret ediniz.",
            "sended": "2021-09-09T07:59:00.000000Z"
        },
        {
            "unique": 1,
            "title": "BÜYÜKŞEHİR, MUSEM AKADEMİ İLE GASTRONOMİ PROFESYONELLERİ YETİŞTİRECEK",
            "message": "İnanıllmaz olay!\r\nPişirilen ve yenmek üzere olan tavuk canlandı ve etrafındakilere korku dolu anlar yaşattı...\r\nhaberin devamı için uygulamayı ziyaret ediniz.",
            "sended": "2021-09-09T07:59:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/user/notifications`


<!-- END_0b714276c2e5e68d96c8ede34405fc24 -->

<!-- START_d779174b1e41879e897200362279b918 -->
## Favorite list

[Favorilerim listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/user/favorites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/favorites"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/user/favorites',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/favorites'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": {
        "campaigns": [
            {
                "unique": 4,
                "title": "Şok  edecek fiyatlar",
                "summary": "%30 inidirim",
                "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/campaign\/899cb807dbcd269cb42e72bc442ab301.jpg",
                "created": "2021-09-09T08:46:33.000000Z"
            },
            {
                "unique": 3,
                "title": "Primemalda İndirim",
                "summary": "%40 indirim",
                "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/campaign\/a00676f21fe8baecab7b25d0b2f4ed71.jpg",
                "created": "2021-09-09T04:51:49.000000Z"
            }
        ],
        "events": [
            {
                "unique": 4,
                "title": "Anadolu Bilişim Buluşmaları",
                "summary": "Bilişimin kalbi Güneydoğu'nun incisinde atacak. Gaziantep Üniversitesi, ICT MEDIA ve Harput Ajans sektörün uzmanlarını 8-9 Mart 2018'de Gaziantep'te buluşturuyor.",
                "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/87bce76a97e788c763e387e06da71772.jpg",
                "created": "2021-09-09T04:27:33.000000Z"
            },
            {
                "unique": 3,
                "title": "8 ŞUBAT GAZİANTEP’E GAZİLİK UNVANININ VERİLİŞİNİN 100.YILI ANKARA’DA KUTLANDI",
                "summary": "TBMM himayelerinde Gaziantep Büyükşehir Belediyesi ve Gaziantep Valiliği iş birliğinde 8 Şubat 1921’de Antep’e “Gazilik” unvanının verilişinin 100’üncü yılı Ankara’da organize edilen özel bir etkinlikle kutlandı.",
                "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/4552d4dacee2144fb7629cd355c8c523.jpg",
                "created": "2021-09-09T04:25:34.000000Z"
            },
            {
                "unique": 2,
                "title": "Şühedaya Mektup ve Anı Yazma Yarışması",
                "summary": "Mektup ve Anı Yazma Yarışması",
                "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/02f27a72c44a484cee0a1ec2cfb1da5e.jpg",
                "created": "2021-09-09T03:44:31.000000Z"
            },
            {
                "unique": 1,
                "title": "Komposizyon Yarışması",
                "summary": "Komposizyon Yarışması",
                "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/183a151eafd713af117e66d6b4e7b2d6.jpg",
                "created": "2021-09-09T03:28:05.000000Z"
            },
            {
                "unique": 6,
                "title": "GAZİANTEP'İN DÜŞMAN İŞGALİNDEN KURTULUŞUNUN 99. YIL DÖNÜMÜ KUTLANDI",
                "summary": "Gaziantep’in Düşman İşgalinden Kurtuluşunun 99. Yıl Dönümü dolayısıyla tören düzenlendi.",
                "image": "http:\/\/genckart.gaziantep.bel.tr\/upload\/event\/44c518ce3aeb878e44cf73709b2893db.jpg",
                "created": "2021-09-09T04:34:16.000000Z"
            }
        ]
    }
}
```

### HTTP Request
`GET api/user/favorites`


<!-- END_d779174b1e41879e897200362279b918 -->

<!-- START_57ecd61e5d1c261ac48dbb5437426c61 -->
## Coupon list

[Kuponlarım listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/user/coupons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/coupons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/user/coupons',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/coupons'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": []
}
```

### HTTP Request
`GET api/user/coupons`


<!-- END_57ecd61e5d1c261ac48dbb5437426c61 -->

<!-- START_f59d4cbbf9176342893379adb70dc1a5 -->
## Events list

[Etkinlikler listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/user/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/user/events',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/events'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": []
}
```

### HTTP Request
`GET api/user/events`


<!-- END_f59d4cbbf9176342893379adb70dc1a5 -->

<!-- START_34f9944e660c801890cc14e44691aac6 -->
## Points history list

[Puan kazanım listesi]

> Example request:

```bash
curl -X GET \
    -G "http://genckart.gaziantep.bel.tr/api/user/points" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY"
```

```javascript
const url = new URL(
    "http://genckart.gaziantep.bel.tr/api/user/points"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://genckart.gaziantep.bel.tr/api/user/points',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://genckart.gaziantep.bel.tr/api/user/points'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzk4ZDUyOTNiZGY3YmVjZTEyZjM5YzY5MDViNzA2ZTliMmRhMWYzMDI4OTQ4YmYyMjhkYjM5NzAzZWU3YmNmNTBhMDliNGFlYzc3OGRiYTciLCJpYXQiOjE2MzIyMjE2MTAuOTY0NjIzLCJuYmYiOjE2MzIyMjE2MTAuOTY0NjMsImV4cCI6MTY2Mzc1NzYxMC44NTI1NDQsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.B34RiEteaEPv-GUxolLhxP2D6PfxSY3L8-QBIQddhob-vDUD5uj_7kTagwcwiX51TDYx1puVLKk-fWxyRVWNSM9ziqFHVJa-QQ3CJnwW_iG2WnqyAYK4AYKTh-ERCb4o50YEZZnZasX5qBJ3k14HCvKVtlvPjM3Y7c7vO5sgm0gvt6BD4F6oeH-Hdh3al7veAS5UoqH37rNjwKgWS7Q8TwYL9uhkhq22Tsyd7iW0j8Ro6vYLDWZjjs4e0SIo_DDT-hb4Tdn6uezQHE6A-uQKIKJYKI_zlBCLlO80gStne2kuhv7aBvXdriU2MJkQWYhyUzI2aKaR9M0G2DfKMuItLpUR5b3i78FI4FXlyPk4wrQFVZRsfHU5NrJ-3XsJULX8mNK_CwyHRabykWqNyO7NIUxwe7SBiwgItY_1nkONqkaSYw_LMLWWA05MkMGPbw4I0arVNWhEOnN3cymW8fLvGSEANU-OjT6TcO8zoGcqo6Eo-DUc_EfxG9kpAliq_yb9sybA_4ovM6SynQAr_xyWu9b5p1ILCdsH6mFWeTmD1BAaNGptiGsX8-b2sVenQI11-2QnPUbx2tp0OILAQxft7GusdE_iHSWKu9Pw_SajnbxdWVYftBy8PJLaXhQYA59QRIca-1MqCKSLIzt7zmoN6NVwQPJ3m_6bCRqGL6_PJUY'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "status": true,
    "data": []
}
```

### HTTP Request
`GET api/user/points`


<!-- END_34f9944e660c801890cc14e44691aac6 -->


