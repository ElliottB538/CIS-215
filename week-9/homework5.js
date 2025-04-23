/*
Elliott Beeley
ebeeley@genesee.edu 
homework 5
        
This file uses many different functions to preform different tasks.
Some tasks being done in different ways, but get the same output.
*/



/* this function calculates all the numbers between 1 and 30 that are divisible by 2 
There are no parameters
The function returns all the numbers between 1 and 30 that are divisible by 2
Type integer
*/

//numbersDivisibleBy2 scope is global

function numbersDivisibleBy2(){

    //for loop

    for (let i = 1; i <= 30; i++){

        if(i % 2 === 0){

            console.log(i);

        }

    }

    //for this task I felt like the while loop was a better choice

    //while loop

    let i = 1;

    while (i <= 30) {

        if (i % 2 === 0){

            console.log(i);

        }

        i++;

    }

}

numbersDivisibleBy2();

    /* This function calculates all of the even numbers between 1 and 10
    Parameter is n, type integer
    This function returns all the even numbers between 1 and 10
    Type integer
    */

    //printEvenNumbers scope is global

    // I thought the for loop was a better/easier choice for this task

function printEvenNumbers(n){

    //for loop

    let evenNumbers = [];

    for (let i = 1; i <= n; i++){

        if (i % 2 === 0){

            evenNumbers.push(i);

        }

    }

    console.log(evenNumbers);

    //while loop

    let evenNumber = [];
    let i = 1;

    while(i <= n){

        if (i % 2 === 0){

            evenNumber.push(i);

        }

        i++;

    }

    console.log(evenNumber);

}

let n = 10;
printEvenNumbers(n);

//for this task I chose the Array.prototype.find() method
/*this method searches an array and finds the first element that satisfies the function.
no parameters
This function returns the first element in the array that is greater than 20
Type integer
*/

//this function is global

function findElement(){

    const array = [1,11,15,16,40];

    const found = array.find((element) => element > 20);

    console.log(found);

}

findElement();

/* this function calculates the letter grade earned from a given number
Parameter is number, type is integer
This function returns a letter grade depending on what number is given in the let statement.
Type string
*/

//this function is global

function letterGrade(number){

    if (number >= 90){
        return 'A';
    }else if (number >= 80){
        return 'B';
    }else if (number >= 70){
        return 'C';
    }else if (number >= 60){
        return 'D';
    }else {
        return 'F';
    }

}

// example 

let grade = 77;
console.log("Your grade is: " + letterGrade(grade));







    




