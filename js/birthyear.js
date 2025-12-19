const byear=prompt("Enter your birth year:");

if(byear>=1946 && byear<=1964){
    alert("You are a Baby Boomer.");
}else if(byear>=1965 && byear<=1980){
    alert("You are a Generation X.");
}else if(byear>=1981 && byear<=1996){
    alert("You are a Millennial.");

    const answer=prompt("Are you single? (yes/no)");

    if(answer=="yes"){
        alert("Please get married. You're getting bald!");
    }else if(answer=="no"){
        alert("You are a married Millennial.");
    }
}else if(byear>=1997 && byear<=2012){
    alert("You are a Generation Z.");
}else{
    alert("You are from another generation.");
}
