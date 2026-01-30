# MVC
A simple MVC Architecture using object-oriented principles

### Getting Started
```
git clone https://github.com/ycisir/php-mvc.git
cd php-mvc
php -S localhost:8000 -t public
```

### cURL requests
```
# Create a student
curl -X POST localhost:8000/create

# Read students
curl localhost:8000/

# Show single student
curl localhost:8000/show

# Update a student
curl -X PUT localhost:8000/update

# Delete a student
curl -X DELETE localhost:8000/delete
```