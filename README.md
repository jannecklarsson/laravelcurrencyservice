# Laravel Currency Service

Create an account at https://openexchangerates.org and add appid att the end in url variable in the file.
<br />
Add file to folder app\Services.
If folder Services doesnt exist, create one.
<br />
The result is returned as an array due to "json_decode" in class method curl();
<br />
In openexchangerates.org free version base currency is allways USD and max 1000 calls/month.
<br />

## Example
````
use App\Services\Currency;
$currency = new Currency;
$rate = $currency->rate();
````
## Result
````
{
  "disclaimer": "Usage subject to terms: https://openexchangerates.org/terms",
  "license": "https://openexchangerates.org/license",
  "timestamp": 1510088400,
  "base": "USD",
  "rates": {
    "AED": 3.672896,
    "AFN": 68.655,
    "ALL": 115.2,
    "AMD": 486.560001,
    "ANG": 1.786129,
    "AOA": 165.9225,
    "ARS": 17.658,
    "AUD": 1.308195,
    "AWG": 1.786752,
    "AZN": 1.6985,
    "BAM": 1.6895,
    "BBD": 2,
    "BDT": 83.35,
    "BGN": 1.687693,
    "BHD": 0.377247,
    "BIF": 1761,
    "BMD": 1,
    "BND": 1.364393,
    "BOB": 6.929268,
    "BRL": 3.2717,
    "BSD": 1,
    "BTC": 0.000142767189,
    "BTN": 65.052215,
    "BWP": 10.556232,
    "BYN": 1.983702,
    "BZD": 2.011246,
    "CAD": 1.277641,
    "CDF": 1579,
    "CHF": 0.999783,
    "CLF": 0.02359,
    "CLP": 634.7,
    "CNH": 6.642776,
    "CNY": 6.638783,
    "COP": 3036.08,
    "CRC": 569.743642,
    "CUC": 1,
    "CUP": 25.5,
    "CVE": 95.4,
    "CZK": 22.053693,
    "DJF": 178.77,
    "DKK": 6.421866,
    "DOP": 48.025,
    "DZD": 115.39,
    "EGP": 17.644,
    "ERN": 15.191062,
    "ETB": 27.35,
    "EUR": 0.862817,
    "FJD": 2.064896,
    "FKP": 0.759482,
    "GBP": 0.759482,
    "GEL": 2.542679,
    "GGP": 0.759482,
    "GHS": 4.4125,
    "GIP": 0.759482,
    "GMD": 47.25,
    "GNF": 9000,
    "GTQ": 7.349687,
    "GYD": 208.050732,
    "HKD": 7.805205,
    "HNL": 23.54958,
    "HRK": 6.506452,
    "HTG": 63.39611,
    "HUF": 268.85275,
    "IDR": 13508.746714,
    "ILS": 3.516575,
    "IMP": 0.759482,
    "INR": 65.145,
    "IQD": 1183,
    "IRR": 34643.946723,
    "ISK": 105.91,
    "JEP": 0.759482,
    "JMD": 126.603782,
    "JOD": 0.708997,
    "JPY": 113.94658,
    "KES": 103.655,
    "KGS": 68.853479,
    "KHR": 4038,
    "KMF": 424.58,
    "KPW": 900,
    "KRW": 1115.76,
    "KWD": 0.302913,
    "KYD": 0.833893,
    "KZT": 333.914041,
    "LAK": 8322,
    "LBP": 1513.4,
    "LKR": 153.548466,
    "LRD": 119.487924,
    "LSL": 14.165,
    "LYD": 1.38,
    "MAD": 9.529493,
    "MDL": 17.482608,
    "MGA": 3161,
    "MKD": 53.132968,
    "MMK": 1355.85,
    "MNT": 2451.74248,
    "MOP": 8.041965,
    "MRO": 355.5,
    "MUR": 34.4975,
    "MVR": 15.369738,
    "MWK": 725.55,
    "MXN": 19.152145,
    "MYR": 4.229583,
    "MZN": 60.994761,
    "NAD": 14.245,
    "NGN": 360.215,
    "NIO": 30.77975,
    "NOK": 8.169307,
    "NPR": 103.275,
    "NZD": 1.448016,
    "OMR": 0.385124,
    "PAB": 1,
    "PEN": 3.24185,
    "PGK": 3.2048,
    "PHP": 51.435,
    "PKR": 105.3,
    "PLN": 3.663895,
    "PYG": 5649.85,
    "QAR": 3.8325,
    "RON": 3.994407,
    "RSD": 102.4575,
    "RUB": 59.3269,
    "RWF": 833,
    "SAR": 3.7512,
    "SBD": 7.792911,
    "SCR": 13.611618,
    "SDG": 6.68,
    "SEK": 8.394108,
    "SGD": 1.364064,
    "SHP": 0.759482,
    "SLL": 7643.328121,
    "SOS": 593,
    "SRD": 7.448,
    "SSP": 130.2634,
    "STD": 20969.700481,
    "SVC": 8.755989,
    "SYP": 514.98999,
    "SZL": 14.229696,
    "THB": 33.153,
    "TJS": 8.808255,
    "TMT": 3.504979,
    "TND": 2.531203,
    "TOP": 2.254482,
    "TRY": 3.887514,
    "TTD": 6.734243,
    "TWD": 30.214,
    "TZS": 2254.1,
    "UAH": 26.7615,
    "UGX": 3637.2,
    "USD": 1,
    "UYU": 29.205747,
    "UZS": 8090.5,
    "VEF": 10.54265,
    "VND": 22713.619974,
    "VUV": 106.059999,
    "WST": 2.546307,
    "XAF": 565.970645,
    "XAG": 0.05894671,
    "XAU": 0.00078351,
    "XCD": 2.70255,
    "XDR": 0.714157,
    "XOF": 565.970645,
    "XPD": 0.00100305,
    "XPF": 102.961418,
    "XPT": 0.00108401,
    "YER": 250.35,
    "ZAR": 14.234905,
    "ZMW": 10.031117,
    "ZWL": 322.355011
  }
}
````
