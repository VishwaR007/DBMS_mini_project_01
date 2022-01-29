<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="3.21)subSelectionByTeachersStyle.css" class="rel">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php session_start(); ?>

    <div class="container1">
        <div class="container2">

            <div class="teacherName">
                <h1>
                    Hello <?php echo $_SESSION['FirstName']," ", $_SESSION['LastName'] ?> </h1>
                <p>Please Choose the subjects below :</p>
            </div>

            <div class="container3">

                <form action="3.21)subSelectionByTeachersPHP.php" method="post">
                    <div class="box">
                        <label for="FirstSem" class="form-label">First Sem : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="FirstSem" class="form-select" name="FirstSem">
                                    <option selected>None</option>
                                    <option value="18CS11">18CS11</option>
                                    <option value="18CS21">18CS12</option>
                                    <option value="18CS31">18CS13</option>
                                    <option value="18CS41">18CS14</option>
                                    <option value="18CS51">18CS15</option>
                                    <option value="18CS61">18CS16</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <label for="SecondSem" class="form-label">Second Sem : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="SecondSem" class="form-select" name="SecondSem">
                                    <option selected>None</option>
                                    <option value="18CS11">18CS21</option>
                                    <option value="18CS21">18CS22</option>
                                    <option value="18CS31">18CS23</option>
                                    <option value="18CS41">18CS24</option>
                                    <option value="18CS51">18CS25</option>
                                    <option value="18CS61">18CS26</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <label for="ThirdSem" class="form-label">Third Sem : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="ThirdSem" class="form-select" name="ThirdSem">
                                    <option selected>None</option>
                                    <option value="18CS11">18CS31</option>
                                    <option value="18CS21">18CS32</option>
                                    <option value="18CS31">18CS33</option>
                                    <option value="18CS41">18CS34</option>
                                    <option value="18CS51">18CS35</option>
                                    <option value="18CS61">18CS36</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <label for="FourthSem" class="form-label">Fourth Sem : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="FourthSem" class="form-select" name="FourthSem">
                                    <option selected>None</option>
                                    <option value="18CS11">18CS41</option>
                                    <option value="18CS21">18CS42</option>
                                    <option value="18CS31">18CS43</option>
                                    <option value="18CS41">18CS44</option>
                                    <option value="18CS51">18CS45</option>
                                    <option value="18CS61">18CS46</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <label for="FifthSem" class="form-label">Fifth Sem : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="FifthSem" class="form-select" name="FifthSem">
                                    <option selected>None</option>
                                    <option value="18CS11">18CS51</option>
                                    <option value="18CS21">18CS52</option>
                                    <option value="18CS31">18CS53</option>
                                    <option value="18CS41">18CS54</option>
                                    <option value="18CS51">18CS55</option>
                                    <option value="18CS61">18CS56</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <label for="SixthSem" class="form-label">Sixth Sem : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="SixthSem" class="form-select" name="SixthSem">
                                    <option selected>None</option>
                                    <option value="18CS11">18CS61</option>
                                    <option value="18CS21">18CS62</option>
                                    <option value="18CS31">18CS63</option>
                                    <option value="18CS41">18CS64</option>
                                    <option value="18CS51">18CS65</option>
                                    <option value="18CS61">18CS66</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <label for="SeventhSem" class="form-label">Seventh Sem : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="SeventhSem" class="form-select" name="SeventhSem">
                                    <option selected>None</option>
                                    <option value="18CS11">18CS71</option>
                                    <option value="18CS21">18CS72</option>
                                    <option value="18CS31">18CS73</option>
                                    <option value="18CS41">18CS74</option>
                                    <option value="18CS51">18CS75</option>
                                    <option value="18CS61">18CS76</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <label for="EighthSem" class="form-label">Eighth Sem : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="EighthSem" class="form-select" name="EighthSem">
                                    <option selected>None</option>
                                    <option value="18CS11">18CS81</option>
                                    <option value="18CS21">18CS82</option>
                                    <option value="18CS31">18CS83</option>
                                    <option value="18CS41">18CS84</option>
                                    <option value="18CS51">18CS85</option>
                                    <option value="18CS61">18CS86</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="box2">
                        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
                    </div>

                </form>

            </div>
        </div>
    </div>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</body>

</html>