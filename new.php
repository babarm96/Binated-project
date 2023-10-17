<!DOCTYPE html>
<html>
<head>
    <title>Blog Post Management</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        form {
            width: 50%;
            margin: 20px auto;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <h1>Blog Post Management</h1>

    <!-- Form to create a new blog post -->
    <form action="create_post.php" method="post">
        <h2>Create New Blog Post</h2>
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="content" placeholder="Content" required></textarea><br>
        <button type="submit">Create</button>
    </form>

    <!-- List of existing blog posts -->
    <h2>Blog Posts</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Display existing blog posts using PHP -->
            <?php
                // Replace with actual PHP code to fetch and display posts
                // Example:
                /*
                foreach ($posts as $post) {
                    echo "<tr>";
                    echo "<td>" . $post['id'] . "</td>";
                    echo "<td>" . $post['title'] . "</td>";
                    echo "<td>" . $post['content'] . "</td>";
                    echo "<td>
                            <button>Edit</button>
                            <button>Delete</button>
                          </td>";
                    echo "</tr>";
                }
                */
            ?>
        </tbody>
    </table>
</body>
</html>
