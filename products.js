const products = [];

for (let i = 1; i <= 200; i++) {
    products.push({
        id: i,
        title: `TOYOTA HILUX GR-S 2024 DIESEL 2.8L V4 A/T - Model ${i}`,
        details: {
            year: '2024',
            body: 'PICKUP',
            fuelType: 'Diesel',
            transmission: 'A/T',
            drive: 'LHD',
            intColor: 'BLACK',
            extColor: 'BLACK',
            door: '4',
            cylinders: '4 CYLINDER'
        },
        description: `Description for model ${i}`
    });
}
