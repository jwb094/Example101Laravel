Eloquent ORM Queries
Basic CRUD Operations
1. Retrieve All Records
```
$users = User::all();
```
2. Retrieve Specific Columns
```
$users = User::select('id', 'name', 'email')->get();
```
3. Find a Record by Primary Key
```
$user = User::find(1);
```
4. Find or Fail

Throws a ModelNotFoundException if no record is found.
```
$user = User::findOrFail(1);
```
5. Insert a Record
```
$user = new User();
$user->name = 'John Doe';
$user->email = 'john@example.com';
$user->password = bcrypt('password');
$user->save();
```
6. Update a Record
```
$user = User::find(1);
$user->name = 'Updated Name';
$user->save();
```
7. Delete a Record
```
$user = User::find(1);
$user->delete();
```
8. Mass Assignment
```
User::create([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'password' => bcrypt('password')
]);
```
9. Update with Conditions
```
User::where('id', 1)->update(['name' => 'Updated Name']);
```
10. Delete with Conditions
```
User::where('email', 'like', '%@example.com')->delete();
```
Query Scopes
11. Where Clause
```
$users = User::where('status', 'active')->get();
```
12. Or Where
```
$users = User::where('status', 'active')->orWhere('role', 'admin')->get();
```
13. Where Between
```
$users = User::whereBetween('age', [18, 30])->get();
```
14. Where Not Between
```
$users = User::whereNotBetween('age', [18, 30])->get();
```
15. Where In
```
$users = User::whereIn('role', ['admin', 'editor'])->get();
```
16. Where Not In
```
$users = User::whereNotIn('role', ['banned', 'inactive'])->get();
```
17. Where Null

$users = User::whereNull('email_verified_at')->get();

18. Where Not Null
```
$users = User::whereNotNull('email_verified_at')->get();
```
Sorting, Pagination, and Limits

19. Order By
```
$users = User::orderBy('created_at', 'desc')->get();
```
20. Limit Results
```
$users = User::take(10)->get();
```
21. Paginate
```
$users = User::paginate(15);
```
Aggregates
22. Count
```
$count = User::where('status', 'active')->count();
```
23. Sum
```
$total = Order::sum('amount');
```
24. Average
```
$average = Order::avg('amount');
```
25. Max
```
$max = Product::max('price');
```
26. Min
```
$min = Product::min('price');
```
Relationships
27. Eager Load Relationships
```
$users = User::with('posts')->get();
```
28. Lazy Eager Loading
```
$users->load('comments');
```
29. Where Has Relation
```
$users = User::whereHas('posts', function ($query) {
    $query->where('status', 'published');
})->get();
```
30. With Count
```
$users = User::withCount('posts')->get();
```
Advanced Query Building
31. Raw Expressions
```
$users = User::whereRaw('age > ?', [25])->get();
```
32. Join Tables
```
$users = DB::table('users')
           ->join('posts', 'users.id', '=', 'posts.user_id')
           ->select('users.*', 'posts.title')
           ->get();
```
33. Group By
```
$orders = Order::select('user_id', DB::raw('SUM(amount) as total'))
               ->groupBy('user_id')
               ->get();
```
Soft Deletes
34. Soft Delete a Record
```
$user = User::find(1);
$user->delete();
```
35. Retrieve Only Soft-Deleted Records
```
$deletedUsers = User::onlyTrashed()->get();
```
36. Restore a Soft-Deleted Record
```
$user = User::withTrashed()->find(1);
$user->restore();
```

37. Force Delete
```
$user = User::withTrashed()->find(1);
$user->forceDelete();
```