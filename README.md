# 🧩 Product Inventory API

A simple and efficient **RESTful API** built with **Laravel** that manages product information — including product name, price, quantity, and SKU.  
This project demonstrates **CRUD operations**, Laravel routing, migrations, and database connectivity with **MySQL**.

---

## 🚀 Features
✅ Create, Read, Update, and Delete products  
✅ Laravel Eloquent ORM for database interaction  
✅ MySQL integration via `.env` configuration  
✅ Structured API routes (`routes/api.php`)  
✅ Clear separation of controller and model logic  

---

## 🧠 Technologies Used
- **Laravel 10+**  
- **PHP 8+**  
- **MySQL** (XAMPP local environment)  
- **Composer**  
- **Git / GitHub**  

---

## ⚙️ Setup Instructions

### 1️⃣ Clone the repository
```bash
git clone https://github.com/DivyaSreeSandineni/product-inventory-api.git
cd product-inventory-api
```

### 2️⃣ Install dependencies
```bash
composer install
```

### 3️⃣ Create environment file
Duplicate the example file and set your local credentials:
```bash
cp .env.example .env
```
Then edit `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product_inventory
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Generate application key
```bash
php artisan key:generate
```

### 5️⃣ Run migrations
```bash
php artisan migrate
```

### 6️⃣ Start the local server
```bash
php artisan serve
```

Open the app at 👉 **http://127.0.0.1:8000**

---

## 🧾 API Endpoints

| Method | Endpoint | Description |
|--------|-----------|--------------|
| **GET** | `/api/test` | Check if the API is working |
| **GET** | `/api/products` | Get all products |
| **POST** | `/api/products` | Add a new product |

---

## 🧮 Example POST Request (via Postman)
**POST:** `http://127.0.0.1:8000/api/products`

```json
{
  "name": "Laptop",
  "price": 1299.99,
  "quantity": 5
}
```

✅ **Response:**
```json
{
  "message": "Product created successfully"
}
```

---

## 📁 Project Structure
```
product-inventory-api/
│
├── app/
│   ├── Http/Controllers/ProductController.php
│   ├── Models/Product.php
│
├── database/migrations/
│   └── create_products_table.php
│
├── routes/
│   └── api.php
│
└── .env
```

---

## 👩‍💻 Author
**Divya Sree Sandineni**  
📍 Florida, USA  
🔗 [LinkedIn](https://linkedin.com/in/divya-sree-sandineni)
