<?php include 'transcript_backend.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academic Transcript</title>
    <link href="transcript_style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Exo+2:ital,wght@0,100..900;1,100..900&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=La+Belle+Aurore&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/carousel.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-weight: 500;
        }

        td {
            border: 2px solid black;
            text-align: center;
        }
    </style>

</head>

<body class="a4-size">
    <div class="page-content">
        <div class="px-4 py-4 text-center">
            <h4 class="roboto-condensed-heading text-center">BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, <?php echo $transcriptData['boardName']; ?></h4>
            <h5 class="exo-2-paragraph text-center">BANGLADESH</h5>
            <h5 class="merriweather-regular text-center">Higher Secondary Certificate Examination, <?php echo $transcriptData['examYear']; ?></h5>
        </div>
        <div class="row g-5 row-cols-1 row-cols-lg-3 text-center">
            <div class="feature col">
                <p class="source-code text-center">Serial No. <?php echo $transcriptData['serialNo']; ?></p>
                <p class="source-code text-center"><?php echo $transcriptData['secondSerialNO']; ?></p>
            </div>
            <div class="feature col">
                <div class="image-container">
                    <img src="logo.png" alt="Image" class="circular-image">
                </div>
                <h5 class="link">ACADEMIC TRANSCRIPT</h5>
            </div>
            <div class="feature col">
                <table>
                    <tbody>
                        <tr>
                            <td>Letter Grade</td>
                            <td>Class Interval (%)</td>
                            <td>Grade Point</td>
                        </tr>
                        <tr>
                            <td>A+</td>
                            <td>80-100</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>70-79</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>A-</td>
                            <td>60-69</td>
                            <td>3.5</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>50-59</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>40-49</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td>33-39</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>F</td>
                            <td>0-32</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row g-5 row-cols-1 row-cols-lg-3 text-left">
            <div class="feature col">
                <div class="title">
                    <p>Name of Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                    <p>Father's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                    <p>Mother's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                    <p>Name of Institution&nbsp;&nbsp;&nbsp;:</p>
                    <p>Name of Centre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                </div>
            </div>
            <div class="feature col">
                <p class="roboto-slab-desc"><?php echo $transcriptData['studentName']; ?></p>
                <p class="roboto-slab-desc"><?php echo $transcriptData['fatherName']; ?></p>
                <p class="roboto-slab-desc"><?php echo $transcriptData['motherName']; ?></p>
                <p class="abel-regular"><?php echo $transcriptData['institutionName']; ?> [ <?php echo $transcriptData['institutionCode']; ?> ]</p>
                <p class="abel-regular"><?php echo $transcriptData['centreName']; ?> [ <?php echo $transcriptData['centreCode']; ?> ]</p>
            </div>
        </div>
        <div class="row g-5 row-cols-1 row-cols-lg-4 text-left">
            <div class="feature col">
                <div class="title">
                    <p>Roll No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                    <p>Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                </div>
            </div>
            <div class="feature col">
                <p class="roboto-slab-desc"><?php echo $transcriptData['rollNo']; ?></p>
                <p class="roboto-slab-desc"><?php echo $transcriptData['group']; ?></p>
            </div>
            <div class="feature col">
                <div class="title">
                    <p>Registration No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                    <p>Type of Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                </div>
            </div>
            <div class="feature col">
                <p class="roboto-slab-desc"><?php echo $transcriptData['regNo']; ?></p>
                <p class="roboto-slab-desc"><?php echo $transcriptData['studentType']; ?></p>
            </div>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>SL. No.</td>
                    <td>Name of Subjects</td>
                    <td>Letter Grade</td>
                    <td>Grade Point</td>
                    <td>GPA <p class="inter">(without additional subject)</p>
                    </td>
                    <td>GPA</td>
                </tr>
                <tr class="table_row">
                    <td>1</td>
                    <td class="subject">Bangla</td>
                    <td><?php echo $transcriptData['bangla']; ?></td>
                    <td>
                        <?php
                        echo $gradePoints[$letterGradeBan];
                        ?>
                    </td>
                    <td rowspan="6">
                        <?php
                        $total = $gradePoints[$letterGradeBan] + $gradePoints[$letterGradeEng] + $gradePoints[$letterGradeICT] + $gradePoints[$letterGradePhy] + $gradePoints[$letterGradeChe] + $gradePoints[$letterGradeHM];
                        echo $total / 6;
                        ?>
                    </td>
                    <td rowspan="8">
                        <?php
                        $total = $gradePoints[$letterGradeBan] + $gradePoints[$letterGradeEng] + $gradePoints[$letterGradeICT] + $gradePoints[$letterGradePhy] + $gradePoints[$letterGradeChe] + $gradePoints[$letterGradeHM] + ($gradePoints[$letterGradeBio] - 2);
                        echo $total / 6;
                        ?>
                    </td>
                </tr>
                <tr class="table_row">
                    <td>2</td>
                    <td class="subject">English</td>
                    <td><?php echo $transcriptData['english']; ?></td>
                    <td>
                        <?php
                        echo $gradePoints[$letterGradeEng];
                        ?>
                    </td>
                </tr>
                <tr class="table_row">
                    <td>3</td>
                    <td class="subject">Information & Communication Technology</td>
                    <td><?php echo $transcriptData['ICT']; ?></td>
                    <td>
                        <?php
                        echo $gradePoints[$letterGradeICT];
                        ?>
                    </td>
                </tr>
                <tr class="table_row">
                    <td>4</td>
                    <td class="subject">Physics</td>
                    <td><?php echo $transcriptData['physics']; ?></td>
                    <td>
                        <?php
                        echo $gradePoints[$letterGradePhy];
                        ?>
                    </td>
                </tr>
                <tr class="table_row">
                    <td>5</td>
                    <td class="subject">Chemistry</td>
                    <td><?php echo $transcriptData['chemistry']; ?></td>
                    <td>
                        <?php
                        echo $gradePoints[$letterGradeChe];
                        ?>
                    </td>
                </tr>
                <tr class="table_row">
                    <td>6</td>
                    <td class="subject">Higher Mathematics</td>
                    <td><?php echo $transcriptData['higherMathematics']; ?></td>
                    <td>
                        <?php
                        echo $gradePoints[$letterGradeHM];
                        ?>
                    </td>
                </tr>
                <tr class="table_row">
                    <td colspan="5" class="additional">Additional Subject :</td>
                </tr>
                <tr class="table_row">
                    <td>7</td>
                    <td class="subject">Biology</td>
                    <td><?php echo $transcriptData['biology']; ?></td>
                    <td>
                        <?php
                        echo $gradePoints[$letterGradeBio];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $gradePoints[$letterGradeBio] - 2;
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row g-5 row-cols-1 row-cols-lg-2" style="margin-top: 5px;">
            <div class="feature col text-left">
                <div class="title">
                    <p class="publish">Date of Publication of Results : <?php echo $transcriptData['resultPublicationDate']; ?></p>
                </div>
            </div>
            <div class="feature col text-center">
                <p class="abel-regular">Controller of Examinations</p>
            </div>
        </div>
    </div>
</body>


</html>