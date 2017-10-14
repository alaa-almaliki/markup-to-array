# Markup to Array
This package can be used as basic a converter from XML, Json and YAML files to array

# Install
Use composer

# Usage
## XML
```
// XML file
<root>
    <persons>
        <person1>
            <name>Alaa</name>
            <job>Web Developer</job>
            <years>3</years>
            <address>
                <lines>
                    <line1>Flat 1</line1>
                    <line2>123 whitefield Road</line2>
                </lines>
                <town>Bolton</town>
                <postcode>123456</postcode>
            </address>
        </person1>
    </persons>
</root>
$markup = new \Markup\Data('data.xml');
print_r($markup->toArray());

OUTPUT:
Array
(
'persons' => [
                'person1' => [
                    'name' => 'Alaa',
                    'job' => 'Web Developer',
                    'years' => 3,
                    'address' => [
                        'lines' => [
                            'line1' => 'Flat 1',
                            'line2' => '123 whitefield Road',
                        ],
                        'town' => 'Bolton',
                        'postcode' => '123456'
                    ]
                ],
            ]
)
```
## JSON
```
// JSON file
{
  "persons": {
    "person1": {
      "name": "Alaa",
      "job": "Web Developer",
      "years": 3,
      "address": {
        "lines": {
          "line1": "Flat 1",
          "line2": "123 whitefield Road"
        },
        "town": "Bolton",
        "postcode": "123456"
      }
    }
}

$markup = new \Markup\Data('data.json');
print_r($markup->toArray());
OUTPUT:
Array
(
'persons' => [
                'person1' => [
                    'name' => 'Alaa',
                    'job' => 'Web Developer',
                    'years' => 3,
                    'address' => [
                        'lines' => [
                            'line1' => 'Flat 1',
                            'line2' => '123 whitefield Road',
                        ],
                        'town' => 'Bolton',
                        'postcode' => '123456'
                    ]
                ],
            ]
)

```
## YAML
```
// YAML file
persons:
  person1:
    name: Alaa
    job: Web Developer
    years: 3
    address:
      lines:
        line1: Flat 1
        line2: 123 whitefield Road
      town: Bolton
      postcode: 123456
      
$markup = new \Markup\Data('data.yml');
print_r($markup->toArray());
OUTPUT:
Array
(
'persons' => [
                'person1' => [
                    'name' => 'Alaa',
                    'job' => 'Web Developer',
                    'years' => 3,
                    'address' => [
                        'lines' => [
                            'line1' => 'Flat 1',
                            'line2' => '123 whitefield Road',
                        ],
                        'town' => 'Bolton',
                        'postcode' => '123456'
                    ]
                ],
            ]
)
```

