<style>


#img1{
    margin-left:0px;
    border-radius:px;
    margin:10px;
    margin-top:0%;
    padding:0px;

}
#img2{
    margin:5px;
    position: absolute;
    top:0%;
    right:-1%;
    transform: translate(-30%,-30);
    height: 200px;
    width: 200px;
}
#img3{
  
    position: absolute;
    top: 27%;
    left:18%;
    transform: translate(-20%,-50);
    height: 80px;
    width:110px;

}

h5{
   margin-top: -250px;
    font-size: 25px;
    text-align: center;
    color:darkblue;

}
h3{
    margin-top:-35px;
    font-size:35px;;
    text-align: center;
    color:orange;

}
h4{
 
    margin-top:-30px;
    text-align: center;
    color:darkblue;
}
h6{
    color: red;
    margin-top:-10px;
     text-align:center;
     font-size: 20px;
}

h2{

    font-size:25px;
    margin-top:-10px;
    text-align: center;
    color: blueviolet;
}

h1{
    margin: 15px;
    margin-bottom: 10;
    font-size: 60px;
    color:darkblue;
}

p{
    text-align: center;
    color:blue;
    font-size: 30px;

}

.banner{
    width: 1450px;
    height: 800px;
    position: relative;
    overflow: hidden;
    border: solid 5px;

}
.slider{
    width: 100%;
    height:100%;
    position: relative;
    top:20%;

}
.sliderimg{
    height:100px;
    width: 100%;
    height: 100%;

}
.overlay{
    
    border:solid 10px;
    width:100%;
    height:100%;
    background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
    position: absolute;
    top:10%;

}


form{
    border:solid 5px;

}

.infor-detalis{
    display: flex;
    display: inline-block;
margin:50px;
text-align: center;    
border-radius: 10px;
background:rgb(0, 0, 0);
color: green;
width: 650px;
padding: 4px;
margin-left: 400px;
margin-top: 100px;
}

p{
    color:blue;
}

label{
    
    width: 100px;
    display: inline-block;
    margin: 5px;
}

</style>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <img Id="img1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUYU9K7BwP8VTo8dZzJnPBIqlJ-iPOF_hCOw&usqp=CAU">
       
    <img Id="img2" src="http://www.smjoshicollege.com/smjoshi1.jpg">

    <img Id="img3" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWBxgXFRYZGBgYGh8cHRoaHCEhGRwfJR8cHyEeJh4eIS4lHiErHyMhJjgmLC8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHjQsJCsxNDQ/NDQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAOAA4AMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcDBAUBAgj/xAA9EAACAQMCBAQEAwYDCQEAAAABAgADBBESIQUGMUETIlFhBzJxgRSRsRVCUqHB0SNichczNoKSssLh8Bb/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAgEDBP/EACIRAQEAAgICAwEBAQEAAAAAAAABAhEDIRIxQVFhMnEiE//aAAwDAQACEQMRAD8AuaIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiB5E5PG+MUqHDqru48inygjVnGwA65zKtpc9vV5RqW7lvxBwiODuy56s3qBsT3zJuUntGWcx9rozEoDlHmR7LjCvVZ2pMCrKGz7A4J7GXpw+9StZJVpnKOoZSRg4PtMxymRhnMptuRES1kREBERAREQEREBERAREQEREBERATyM7Svrr4jonNBoaQ1FfKaoO+oDc+hXO0y2T2nLKT2sGadzfoobzrqVSxXI1YAz0zkD3lWJ8V6orVdVJWXfw8ZGOw1eoxvt6yIcSuK1eubqq6r4rBCy+mMEY7ACc8uSfDnlzSTpYPKXxJavxnwrhUVajYpsuRg74Vsk5zsM7byze0/L9fIqZUqQhwHUY1Ebg+5kq4JzpcWvEDUqu1wjofLq2DdRjPQg7H2k48muqjDm+K+atgKnNlzbVCPM7lX1fKxOR9dtsSO8a4fUoXQp1FClRsR0YfxZmS8uab2hqHP4h6rMxz5QCc5A+88r21SpWwai1NCFtRbIC/U/pOdu3DK97adzZOlNGZfK4DK3Yj+8nfA7K9qcsFbG41LrOpclHQgAhVJ7HrtiRKsGFnSRHFTALlBuEI7b+3UTPR5irIGSg7UUqEFlTYZOxI7iMbJW4ZSV+g+G02Xh9NXYs4RQxPUnAz/Obc/ONe9qm/bN058IHS5cknpkLgzr1OfL1+CFMqFUBWqAHxGB2G+djjvO05Y9E559L0VwehG22x7+k+5APhbwdafDjXWqX8dVyvZSCc533PvJ/Ll3NuuOW5t7ERKUREQEREBERAREQEREBET5JwIGhxpah4TVFEZqFGCjONyPX1n5ur8Pqrcsjo6uoyysCGHqTmfpm3ukdco6sAcZUgjP2kH+J1nb1eHOfEVbiimsAEayuQCpGdwf6TnyTc248uPlNyqiXhL+FTYMh8QnHmGRjrkdppVarFdJbKqSAOw/+9ZsWakVFbTrA6qdgQdvvPn8OVrqzJ5de6564O6/lPM8sr5tmAqKdOvc5U7KZ8OHCaSCF+bBG31nVW+V1qIKYPi1FZB0VT/D9xtHEWrGjrdxnJp6B1Crjrj93fGYZtr2lvTK0ty7s+Gpjrp9j9Jsva1Fq1Xo0nFNtSb7gDbIJ9ROnw/jdtTscm1Arr0I6ezZPefVy9X/APMBKeCgJqVmDfKxOyfoZWo2xG7Wogqksr6dBHlO4PY59MzL4NWtUU41tj5RjOlepOO3vPOH11Wq+XKBkPbIJ6hTnsZn4XceHbuSBmojorA+YHbbHYGGPihRSrxhUUMqM+AAMsM9fyMmHNXLTUbdFt0dyVGt9sYTocdpw7V6lDiDO7AMU0BkGSrYBAAH03M205hepZ+DWrVFV2+cr5tOnpn/AFdZuNmrts8ddtPlPjte0qvWQF0C6WVm8gJIIOPUH0nc4x8QLq4ekLfVQPylVIOtycbZHT295ETSppaBlqlnLbpg4Az69NUsDkDk1nuPHuUdAjK1Eahg/vZ26jp+cY+V6i8Lleos3hXi/s2n4+PF0jXp6au828yrebObb235lKU2omnkBVOD2Hzdwc+/pIrV5qvG4/SudSlyQi0kJ04zjQV9yfWdrySdO95cZdL+iYqTE0gSMEgEj0PcTLOjsREQEREBERAREQPDKt+JnNlF+HPbUajFw4D6QdJA6rq7749tpaXaVneci2lHiNS4vK4FJ3JVT5TljnBbqSPYSM961Ecm7NRVVhxCrRrBqVR0ORurEfmB1n1xJy92W8RqzONTMQck9/tJtxVeD2/E6bIrVw2CQj+RMHr0yT7ZkNqOjXT1AxVWcgKoGooTv9Np57NfLyZSzrbY4TTU3CeKH0qjN8pYY7EAdv7TWYIw0JrK696hzpAPcr2nSZ1/EvTd3SnTplqfTUNsqCR+k16Fk/7LqL4iodas1NiBqGMg+/0maQ06usVtLDUtL+Hb6HM8ekVuEDNlX0k79Axyc/ad2tw+5ubhP8JEbHzggeUDbUMzkVnKsUdFd08hY5OBnbbofYxoSHmhbd0phGpGrvqKHClANgT69JHrK/rLQdKa5RwEYBcg+m/r7zPwy6FB2ytOqlQYYHquP0M3+KUqlPhlGiECgkuWRhltXQfb1m2ylvy51rw5m4ihuAaSNnzMu2QNh/KfV7dUDYuBSxWL/MpOjSO49M+kwtWDV6Wqs2onzltwmDjYd9p0OZOIIUSlbYakgVi2nzFvc+mYGhZ3bpSD5y26JlcgE41b9mnSPD7m5ufw+V100BwSPTsfp1E1K9FTYq6uxql9WhEJRem+fWZrqsLYB0d1uifPqHmTI336HJiDMeI0k4DUtntx4oJAqAZ83TVnt0nRtfiBe0eD00CppCaVdlJYhdgevYfpI+OMv4mp2FQuBrBAAxuNJ2679RJE1klxyolckI9AFFDfI2DkD3JE3G3fVVjll8Ijc19Y1sWNV3ZmY98+nvN+xt7f9tWw8ZtDMpqMfLo36Z/rMnDKSVOMWqVWTw9tYLYUAtuCexk5q/C+lVvWelXUUWzpCjUVPpnOCIxxt9Nxxt7na0KWNAxuMDBznbtv3mSavD7UUrFKYJIRQuT1OBjM2p6nuIiICIiAiIgIiIHkivP/AA63q8CZq+R4QLqVIDZx0GdjnpiSqUn8VkxzKFNV9LqrlWOUX93YD6SM7qOfJdYoNclGbyZUBRnUdye52/Sbd1TpixpOjkOfK6+jD976Gal3bKlxpVw4wCGXpNxbOpU1BWRlppu46BRv1nm08bNrHjBNQd6jBHZj2yMYPbI2zNxbmmvGazVaWvqqLjKq42Ue+RNGxtC9BUp7u4YsAuTgHbB/t6zZs75/xdNHpIXRwDqJVmb90t64msjJcCpUoKyIS1UnW6KcrvjQD6CYbopTtglJtdRlPiM+PJp/dA7GZ+O8RuRxTwqhKaGyqp5V3IP32m1xfiNKpeOzW4ApoCA2xZiQPNjrB+I4a9I0EBQ6lBDEHBbfYzIrI1N9bOSF8gIJJ9AT6CZRcW7U310mRmOpCh+X/Lg9pu8QphaluFemh0rhgctjsX7bTNDltSYVEcoFTbrup9/fM6fDeMNTs6ukJoJwBpB3zncHfGJktbxDWTSiu1JHJapsjb5yFHeaD1/Gt2aoEXGSrDAYnGyYHUTfTH1ZcbdKhKkKC2sINlDdB9u+I4lTP40FlL+JhlJPzZ2wD1wDPOE26ZqFn0VAh0JpzqJGZs8I4kmEV6LVdGApLeZSTsFA7ZhunRsOCmlzBSe5RadIYIyQVJ7LnucyR/EC4ohKFFm0Iz620j93HXb3kTPi1W8ComlwzMHqEnQvXH59598auH/BUrao1N2UgeIMllHYFunSVLqaVMpJqOQyqKjLTpai5Og9Tp6DA9Z1OVubK/D6zIFDIzAsjdQR3B7HH9JybizekusvoZWwi5Ooj1HoP7zBdqfELBCAyg7nUfc5kzrtmOVxu4/R/A+L0rrh4q0WypyNwQQw6gg9xOlK1+EHFi9pUoaFVaWlgVzli2QSc/SWVPTjdzb3Y5eU29iIlKIiICIiAiIgeStvi9b24sUqOreMxKIy7DA3Or19vrLJ7yo/jLxM/jKNBegUu23Uk4G/0BkZ/wA1z5f5qC8KZ6RFREBDZTU48oJ9Pt3mu1cpSdabkq6gVNsAnOdh6ZmX8RWrsx3YgbBTgLtvhfpNVrYDWM7qoYAdx3nleJKeEXlanWpVUUBDT0LqwSSASfplu80qlpc3fEmC0NdXZmdOwz1yDpHp1mpWu3RKGukNCZIXBXX/ABA+v1ks5G41c/t007dFemVBan8qUxqGWB6kjp75lzvUtVjN2SotzHwm5oKv4mmyszEB2bJYAdAQSMAT54jwK6ocNSpXQrTceU5B3IyM75GR6yffGiqD+Gpj5tTN7YOF6/WbfxSp6eT6CsMhWQMAe4QjY/WXcJ3+Ol45N9+lf23FQlqvgomsAoAVJYKepJO2czmXdALw5PKGdyXZhvpXOAPbuZL+IcGPD+XlrhRVa4VVYuDimpAbGPU9MyHWjnWFUDzgg52GDvp/l/Oc7LOq5WXG6ru3LaODU1NuxQUwTUyPMCcj7Z7TdseF063Cqzin4dW3p6zUptmkxPRSuNjp9+04/F+LvURk8NkLKqqmcoAO4HrLV5QsVX4dgKqq1Si7MT0LEMMk/l9JeM8qvjxmVqm+HW9b8VTanTLvU1BBjOo4OrA9hPjhblL8AhgwJ3XZ1PTP2lg8sVVa84VpUjSayMxI3YIxIAHbfOfeafOlpS/2kUkp+QuafiHoMsd+nquM+5meHWzw/wCd/rjcQqpccXd/HCIiKutupOMdO/vNJ77Rw1qKqjMz41Bd3HQZJ7yT8/cn07O1V6AY+JVxlulMYyqg9dznc/0lhcs8rUbfhNNXRHceYuVUnWdzg4zgHpNmFt02cNt0hXLXIdWtfeJfIAgQaVU7sSNs46YE07j4eu1G5a3fGioUWmx6qoBOW9dxiXNNG/sFqWNSmCU8QEFl2bJGNXuek6+E07/+OOtK4+C9oVa5fbGVTY9xqJ+2CJasjHJfKwsbaouvWXfVnGMADAEk83GamlceNxx1XsREpZERAREQEREDyVX8YrfNSiVolmIYGoATgZ+XYde8tSeEScpuaTlj5TT87cm8vtd8bFPUUUKWZh8wHT887bzPa8qM3ODWeoqFLefGTpAyDt67S+bawppWdkpqrOcsVUAsfUkdZXPKpb/aldiocvpfHpjKY37eXE5+EmnC8Ump+uNwHkhru2pVPFbCVmSqtTOQqsD5R7jbBx1nf5MUD4jX4AACrgAdAAyye2NgtLXoz/iOXPTAJABxgdNpCvhhSDXN7VbzVDXKljudI3xn6yvGSxcwmNjQ+K9BW4xZYyzlsaANyuob/XO07fxNtw/AaeogAVqeVPVsnBA98Gc7nv8A464f/qH/AHTb+LVUpwGmw6rWVh9gTH3W/bqc+cP18p1FQD/DAcL2ITfT9MSj7dB+PUshemMuVX+Hvj0l088cWanyO1RQNVVFX2HiAAn32JlFpdBVXRqU4IY5659PQSOX25c076dPi1ujOjUV0iopZV15Kj3PbbtLo5ZtdXIdNBnzW5HqfMD+fWUJarrulVVZs7aQdycS9fh1xRKvLKIp89EaHXuCCcH6ETOP2zh1uxC+QVK3NiynKtUuEKsPlOhWLD0JwB+cz882mfiPbBcZqmkSW6Aq+NvsBNChxN6PDGqNSCtQ4hqCL5SNQbWgPYEbfeSvjQF1zVwt1yoIer5huAuhtP1ztLnrSpJZr9Yvi/cFeHWyDo1bJ/5Rt+ssCl/ul+g/SQL4wKf2FTIUErVHn7qcbfn/AEk34dr/AGfT8TGvQurHTVgZx95c/qu0/qtqexEpZERAREQEREBERAREQE8nsQPO8qzlq4LfFW5JGglXGk9TgoB+eM/SWn3lXKjt8YcspGlSRgYyoXAJ9snrIy+P9c8/j/VoHpK6+H1vp5u4goYhVcDR2OWY6v6feWKekgfJdNRznxEtjXrXH8WnLfyzj+U2+43L3HvPqBeYuHVBkP42jI/hJG2PvOd8VeO0dKWx1F0qJUYY8ujfIz647Tp838WtzzBZ0cJUqrXUkajmnnG+B3OxA9pFPjFSpjjVJ1PnZPMvsD5SfTbP5Tnldbsc87ZLZ+MnO3OlC64WtCgCEyrMzjTsp2RQO/8AaRWwtqY4hRCOHyzMQVwo22yT1xNChQ03K+ImE/zZwMjPbfoZ1eVqBF/XdFVxTRiEP7wJwMfacrlcr28+WVyu6xVrt2ZaiLTpsqlF0jepk4LDt95s8vXdezrC7poRTyKbIWOH9Tn67j3mtxOnXeuiOoVdGtKajCouMkevTaY040W4PWo1G8uF8JCNlIPb02m70yXV6dK65gFfxC+lDUuqdYgHIVQNJHuQNzLU4ndo99Y1KJV9dZlV0IK6PDfUNuo2+xEoy0tneii6DpL6Qw6knt/mkk5X5murZDa0hTANU4eoPk3822RkECVhnre3XDk1vyWn8QLYvyjXC9Qob/pYN/SdyzUi0QMQSFAJHQnAzIRd800rrlC7XUq1UpOrLkAE4OGXJyQf/UlfLdV34DQaqCHNNS2eucdT7nr952llvT0Y2W7jqxESlkREBERAREQEREBERAREQEx+GPEzgZxjON8emZkiB5IRwfhr0uf7uqUYU3pKdZHl1EqSAe+MGTeV38SuEXtRvFoVGNJUw1NWIbqSxwNm2x+UnL1tOXrf0hPMfNaNzULm3ogOhIy+4cjKhtPY4/pMF5xGpe1qtzVpq2UFLSpxpOMhhnvOMnArlrY1FoVCg6toOPedvg3Bb88OenTt3KVSDqYacEdwT+s8+8q8luWTRr0Gq2qOhYuyMWUEaQEwCcdvLFqEp29UCpUBZU0ADSzsf/ETvtytf0KSNRoFXCsjlSpDD+LruCJy6nCrumdNa1djUdArFfOMH5V05xM1fpHjlPhna9qkpbkf44LEu27quM6Bn1Ew2PABUu9IQLiohOpvmBALIPUjrN9OGVkAcWdx4qu5zpJBVsqAT1OAZgsuVuIJkC3fQ7AnOnK77MBnIYCbq/TZjbe49v8AiS0b2tRRFbTUxSwfkJG5E4eutrp1amkjUUBfocdSfXHrJtW5Ja4rqKVBqPhghmqjCuftls984mvfchXlOy0rSp1jggMrHUuT2Vsbj1m3HK/Dbhl8REXdabAqEdnTYqc6WLenaS2lz9eW/DaQbw6nm+Y5LMoHynHQ+/tM3GOQ7ypdI1OlSQKignUAWPfIx1zN64+GNU2QVa67MGCFToBONXm6/wApsxznpuOOePqO5y58QKNxW0VdNFmwV82VOdsEkDDZ7SbyorT4U1vxqtUrUwgYEhQxbAOcDIEt2dcPLXb1YXKz/p7ERLWREQEREBERAREQEREBERATyexA8iexA8iexA8iexAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQP//Z">

     <h5> Education Through Self-Help is Our Motto"-Karmaveer</h5>
     <h3>Rayat Shikshan Sanstha's</h3>
     <h4>ARTS|SCIENCE|COMMERCE|</h4>
     <h6>(Re-Accredited by NAAC with 'A' Grade with CGPA of 3.09)
     <br>(Affilated to Savitribai Phule Pune University,Pune I.D.No.PU/PN/SC/069/1986(Estd.1986)</h6>
     <h2> Princicpal-Dr.GAIKWAD NANASAHEB SURYABHAN M.Sc.Ph.D.</h2>
     <marquee> <tite> <h1>S.M JOSHI COLLEGE, HADAPSAR,PUNE-28</h1></tite></marquee>

     <p> WELCOME TO S.M JOSHI COLLEGE OFFICIAL WEBSITE ADMISSION PROCESS INFORMATION</p>
</head>
<form action="index.php" method="post">

    <title>
        Registration Page  
        </title>  

        <body>
        
    <div class="banner">
        <div class="slider">
            <img  src="D:\images\smj_department_of_professnal_course.jpg" id="sliderimg"  width="100%" height="100%" />
    
        </div>
        <div class="overlay">
            <div class="navbar">
                <div class="logo">
    
                </div>
                <div class="infor-detalis">
                    <h2>Registration FORM </h2>       

                    <label> Firstname </label>         
                    <input type="text" name="firstname" id="firstname"  placeholder="Enter first Name" siz="20"/> <br>
            
    <label> Middlename: </label>     
    <input type="text" name="middlename" id="middlename" placeholder="Enter middle Name" size="20"/><br>
   
    <label> Lastname: </label>         
    <input type="text" name="lastname" id="lastname" placeholder="Enter last Name" size="20"/>
    <br>

        <label style="text-align:justify;">   
            Course :  
            </label>   
            <select name="courses" id="courses" value="courses">
            <option value="BCA">BCA</option>  
            <option value="BBA(CA)">BBA(CA)</option> 
            <option value="BBA">BBA</option>  
            <option value="B.Tech">B.Tech</option>  
            <option value="MBA">MBA</option>  
            <option value="MCA">MCA</option>  
            <option value="COMMERCE">Commerce</option>  
            <option value="B.com">B.com</option>  
            <option value="M.A">M.A</option>  
            <option value="ARTS">Arts</option>  
            <option value="B.A">B.A</option>  
            <option value="SCIENCE">Science</option>  
            <option value="B.sc">B.sc</option>  
            <option value="B.CS">B.cs</option>  
            <option value="M.Tech">M.Tech</option>  
            <option value="M.Sc">M.SC</option>  
            <option value="MA Marathi">MA Marathi</option>  
            <option value="MA English">MA English</option>  
            <option value="AC studey room">AC studey room</option>  
            <option value="IBPS Class">IBPS Class</option>  
            <option value="MA Ph.D chem">MA Ph.D chem</option>  
            </select>
    <br>  
        <label style="text-align:justify;">   
            Acadmic Year:  
            </label>   
            <select name="year" id="year" value="year">
             <option>Select Year</option>
             <option value="First Year">First Year</option>  
             <option value="Second Year">Second Year</option>
             <option value="Third Year">Third Year</option>
             </select>
         <br>
         <br>


        <label style="text-align:right;">   
            Gender :  
            </label>  
            <select name="gender" id="gender" value="gender">
            <option value="">Select gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="other">other</option>
            </select>
            <br>

    <label style="text-align:initial;">   
    country_code:
    </label>  
    <input type="text" name="country_code" id="country_code" value="+91" size="2"/>   
    <br>
    <label style="text-align:right;">phone</label>
    <input type="text" name="phone" placeholder="Enter mobile Number" size="10"/> 
    <br> 

    <label style="text-align:right;">Email:</label>

    <input type="email" id="email" placeholder="Enter your Gmail id" name="email"/>
     <br>
     <br>

         
<form onsubmit ="return verifyPassword()">  
  
    <label>Password:<label>
    <input type = "password" name="password" placeholder="Password" id = "password" required="fill this text">   
    <span id = "message" style="color:red"> </span>
    <br>
    
    <label style="text-align:justify;">Date:</label>

    <input type="date" id="date" placeholder="Enter date" name="date"/>
    <br>
    <br>
 
    <a href="index.html" button type = "back" value = "back" >Back</button>  
</a>
    <br>
    <br>
                      
      
<button type = "reset" value = "Reset" >Reset</button>  
        <br>
        <br>

                    <input type= "submit" value = "Submit">  
    </div>
    </div>

    
<!--
database Query
INSERT INTO `registration` (`firstname`, `middlename`, `lastname`, `courses`,
 `year`, `gender`, `country_code`, `phone`, `email`, `password`) 
 VALUES ('vaishnavi', 'oops', 'jadhav', 'BBA(CA)', '2012-12-16', 'female', '91', '8421224223', 'vaishnavijadhav123321@@gmail.com', '12344321');

-->

         
    
    <script>  
        function verifyPassword() {  
          var pw = document.getElementById("password").value;  
          //check empty password field  
          if(pw == "") {  
             document.getElementById("message").innerHTML = "**Fill the password please!";  
             return false;  
          }  
           
         //minimum password length validation  
          if(pw.length < 8) {  
             document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
             return false;  
          }  
          
        //maximum length of password validation  
          if(pw.length > 15) {  
             document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
             return false;  
          } else {  
             alert("Password is correct");  
          }  
        }
        </script>

        </form>
        </body>
        </html>

<?php
if(isset($_POST['firstname'])){

$server = "localhost";
$username = "root";
$password = "";

// Create database connection
$con = mysqli_connect($server, $username, $password);
// Check connection
if (!$con) {
die("Connection failed: " . mysqli_connect_error());
}
//echo"successfully connected with db";

/*if(isset($firstname) || isset($middlename) || isset($lastname) 
|| isset($courses) || isset($year) || isset($gender) 
|| isset($country_code) || isset($phone) ||
 isset($gmail) || isset($password))
 {
   
}*/

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$courses = $_POST['courses'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$country_code = $_POST['country_code'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];


$sqli = "INSERT INTO `registration`.`registration` (`firstname`, `middlename`, `lastname`, `courses`, `year`, `gender`, `country_code`, `phone`, `email`, `password`, `date`) 
VALUES ('$firstname', '$middlename', '$lastname', '$courses', '$year', '$gender', '$country_code', '$phone', '$email', '$password',current_timestamp());";

echo $sqli;

//$sqli = "INSERT INTO `register`.`register` (`srno`,`firstname`, `middlename`, `lastname`, `courses`, `year`, `gender`, `country_code`, `phone`, `email`, `password`,`other`)
//VALUES ('$firstname','$middlename','$lastname','$courses','$year','$gender','$country_code','$phone','$email','$password','$other',current_timestamp());";


//$sql = "INSERT INTO `register`.`register` (`firstname`, `middlename`, `lastname`, `courses`,`year`, `gender`, `country_code`, `phone`, `email`, `password`,`other`) 
//VALUES ('$firstname', '$middlename', '$lastname', '$courses', '$year', '$gender', '$country_code', '$phone', '$email', '$password',current_timestamp());";
//echo $sql;

if($con->query($sqli) == true){
    echo "successfully insert";
}
else{
    echo "ERROR: $sqli <br> $con->error";
}
$con->close();
}

?>


