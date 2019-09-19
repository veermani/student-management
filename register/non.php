echo "<h3>Welcome ".$row['username']."</h3>";
                                    echo "<table class='i'><tr>";
                                    echo "<td>User name: </td><th>".$row['username']."</th></tr>";
                                    echo "<tr><td>User Contact :</td><th>".$row['contact']."</th></tr>";
                                    echo "<td>Email: </td><th>".$row['email']."</th>";
                                    echo "<tr><td>Address: </td><th>".$row['address']."</th></tr>";
                                    
                                    echo "</table>";
                                    echo "<div class='swapan'></div><div style='' class='p-5 col-md-7 mx-auto'>";
                                    echo "</div><a href='logout.php'>Log Out</a>";
                                    // echo "<a class='btn btn-success j' href='edit2.php'>upload"
                                    ?>
                                    <form action="edit2.php" method="POST">
                                        <input type="submit" name="submit" class='btn' value="update">
                                    </form>
                                    <?php
                                