# ![DotDev](https://avatars3.githubusercontent.com/u/19314960?v=3&s=200)

## DotDev PHP Developer Assessment

The goal of assessment is to test you skills in data structures and formatting.

We have created three data objects `customers`, `orders` and `order_items` in `function loadData()`.

The application should take and integer from stdin or a query string parameter in a web browser and return the approriately formatted data type using data from all three objects.

**Your task is to:**

- Update the function `formatData` to complete the data formatting task.
- Update `$run` to determine if the program is run via the CLI or browser
- You can either create a git repo and send us the link or provide a copy of your git log.

- Do **NOT** use a framework. We want to see your handle of PHP, not how well you can use a framework.
- If you use any modules from composer document your reasoning why you chose the package in the `remarks` section of the code.
- ***The data may not be formatted correctly** Document any errors in the `remarks` section
- The application only needs to run on PHP 7 or higher.

### Usage:

#### 🖥️ CLI:

`~/php assessment.php $option`

#### 🌏 Browser:

` php -S localhost:8000 - assessment.php`


### Example expected results

```json

{
    "orders": {
        "DwsNDQ4JDQEEBQIJBAwNBA" : {
            "date": 1506476504,
            "total": 101.00,
            "customer" : {
                "id": "BQYLCQ0CCwIOBgYNBAcACw",
                "name": "Bob"
            },
            "order_items": [{
                "id": "CgkCDwwDDgYODgYFBAwKAQ",
                "name": "cf3298bb5cbfd41aa44ba18b4f305a36",
                "value": 101.00
            }]
        }
    }
}

```
