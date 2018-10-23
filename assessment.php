<?php
/*
* DotDev - PHP Developer Test
* Author:
* Date Completed:
* Time taken: 0h 0m
* Remarks:
*   - Modules
*   - Errors
 * order_item data structure is not correctly done. need to add brackets for items.
 * else if ladder conditions - value for $option not comparing correctly.
*/

class StoreData {

    protected $customers;
    protected $orders;
    protected $order_items;

    function __construct() {
        $this->loadData();

    }

    public function loadData () {

        $this->customers = (object) [
            ['id' => 'BQYLCQ0CCwIOBgYNBAcACw', 'name' => 'Bob'],
            ['id' => 'CQwPDAkDDAQLBQsOBAcMBw', 'name' => 'Jan'],
            ['id' => 'AgsIBAsFAwYCCw8GBAINAQ', 'name' => 'Steve'],
            ['id' => 'DAEFDQwPDwMCCwULBAAMDg', 'name' => 'Fred'],
            ['id' => 'DQkCAAYHAAMJBA4LBAUOCg', 'name' => 'Robot']
        ];

        $this->orders = (object) [
            ['id' => 'DwsNDQ4JDQEEBQIJBAwNBA', 'customerId' => 'BQYLCQ0CCwIOBgYNBAcACw', 'dateOrdered' => 1506476504],
            ['id' => 'DwsPBQ0BAA0BBwwMBAoECA', 'customerId' => 'BQYLCQ0CCwIOBgYNBAcACw', 'dateOrdered' => 1506480104],
            ['id' => 'DAEFCwUAAgQPAQIIBA4IBA', 'customerId' => 'CQwPDAkDDAQLBQsOBAcMBw', 'dateOrdered' => 1506562904],
            ['id' => 'BAUNCAUAAQYMDgULBAMDAQ', 'customerId' => 'CgUDCQ8IDAsIBwUBBAgIAA', 'dateOrdered' => 1507081304],
            ['id' => 'DAMGAg8GCggLBwkJBAoECg', 'customerId' => 'AgsIBAsFAwYCCw8GBAINAQ', 'dateOrdered' => 1509068504],
            ['id' => 'CQALBwoDAw0AAQgHBAEJBQ', 'customerId' => 'DAEFDQwPDwMCCwULBAAMDg', 'dateOrdered' => 1538012504]
        ];

        $this->order_items = (object) [
            ['id' => 'DwsNDQ4JDQEEBQIJBAwNBA', 'items' => [
                ['id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 10.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73'],
                ['id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,   'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36'],
                ['id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 101.00, 'name' => 'ecbdb882ae865a07d87611437fda0772']
                ]
            ],
            ['id' => 'DwsPBQ0BAA0BBwwMBAoECA', 'items' => [
                ['id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 90.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73'],
                ['id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,   'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36'],
                ['id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 101.00, 'name' => 'ecbdb882ae865a07d87611437fda0772']
                ]
            ],
            ['id' => 'DAEFCwUAAgQPAQIIBA4IBA', 'items' => [
                ['id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 3.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73'],
                ['id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,  'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36'],
                ['id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 15.00, 'name' => 'ecbdb882ae865a07d87611437fda0772']
                ]
            ],
            ['id' => 'BAUNCAUAAQYMDgULBAMDAQ', 'items' => [
                ['id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 10.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73'],
                ['id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,   'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36'],
                ['id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 101.00, 'name' => 'ecbdb882ae865a07d87611437fda0772']
                ]
            ],
            ['id' => 'DAMGAg8GCggLBwkJBAoECg', 'items' => [
                ['id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 32.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73'],
                ['id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,   'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36'],
                ['id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 101.00, 'name' => 'ecbdb882ae865a07d87611437fda0772']
                ]
            ]
        ];
    }

    public function formatData ($option) {

        $finalArr = [];

        // All data should be returned as formatted JSON.
        if ($option === '1') {
            // return orders sorted by highest value. Be sure to include the order total in the response

            $orders = $this->setData();

            usort($orders, function ($item1, $item2) {
                return $item2['order_total'] <=> $item1['order_total'];
            });

            $finalArr['orders'] = $orders;

            echo json_encode($finalArr);


        } elseif ($option === '2') {
            // return orders sorted by date

            $orders = $this->setData();

            usort($orders, function ($item1, $item2) {
                return $item1['dateOrdered'] <=> $item2['dateOrdered'];
            });

            $finalArr['orders'] = $orders;

            echo json_encode($finalArr);

        } elseif ($option === '3') {
            // return orders without items

            $orders = $this->setData();

            // remove order items
            foreach ($orders as &$order){
                unset($order['order_items']);
            }

            $finalArr['orders'] = $orders;
            echo json_encode($finalArr);

        }

        //print 'DotDev';
    }

    public function setData() {

        $customers = (array) $this->customers;
        $orders = (array) $this->orders;
        $order_items = (array) $this->order_items;


        foreach ($orders as &$order){

            foreach ($order_items as $order_item){

                if($order['id'] == $order_item['id']){

                    $order['order_items'] = $order_item;
                    $order_total = [];

                    foreach ($order_item['items'] as $item){
                        if(!empty($item['value'])){
                            array_push($order_total,$item['value']);
                        }
                    }

                    if(!empty($order_total)){
                        $order_total = array_sum($order_total);
                        $order['order_total'] = $order_total;
                        unset($order_total);
                    }

                }

            }

            if (!array_key_exists("order_total",$order)) {
                $order['order_total'] = 0.00;
            }

        }


        //Adding customer data
        foreach ($orders as &$order){
            foreach ($customers as $customer){
                if($order['customerId'] === $customer['id']) {
                    $order['customer'] = $customer;
                }
            }
        }

        return $orders;
    }

}


if (defined('STDIN')) {
    $option = $argv[1];
} else {
    $option = $_GET['option'];
}

$run = new StoreData();
$run->formatData($option);
