## Summary of Work and Time

1. I started by going through the code to understand how the objects interact, and the syntax of why things were written in certain ways. 
- Time Spent: 30 min.

2. I then started working on how to print the HTML. My first strategy was just to print the HTML as it is in the example, using heredoc syntax. So it was hard coded and static. 
- Time Spent: 30 min.

3. My next solution was to add templating so that the HTML would be abstracted from the htmlStatement function, but could also be easily given dynamic variables. I struggled with setting up a Twig template, as I didn't want to add complexity/dependencies to the project if I could help it. I ultimately settled on just using HTML in a PHP file and using PHP tags for the logic. 
- Time Spent: 2 hours.

4. Next I needed to give the template the same logic as the regular statement. One of my other goals was to abstract the calculation logic in the Customer class to separate classes, so I could call that logic again in the HTML function. 
- Time Spent: 2.5 hours.

*Current Status*: After lots of surgery removing the rental calculation and frequent point calculations to separate classes, I realized I had almost run out of time. The template is still having issues referencing the data, but that is really the final hurdle. I'm continuing to work.

## Introduction

This example comes from the book Refactoring by Martin Fowler.

There are solutions to this problem readily available on the Internet, so please adhere to the honor system: don't cheat!

## Requirements

The code uses short array syntax (`$arr = [];`), so you'll need PHP 5.4 or higher.

Feel free to include any external libraries or dependencies that you believe will add value to the project.

## Domain

The domain concerns movie rentals and customer statements.

There are 3 existing classes:

- **`Movie`** is composed of a title - `name` - and a pricing code - `priceCode`.
- **`Rental`** is composed of a `Movie` - `movie` - and a duration - `daysRented`.
- **`Customer`** is composed of a name - `name` - and, optionally, a `Rental` collection / array - `rentals`.

The `Customer` class also contains a method - `statement()` - that prints a plain-text statement containing the customer's billing and loyalty information.

## Current State

The program can be run by `$ php index.php`.

This should be the output:

```
Rental Record for Joe Schmoe
        Back to the Future              3
        Office Space                    3.5
        The Big Lebowski                15
Amount owed is 21.5
You earned 4 frequent renter points

```

## Your Tasks

1. The business requires statements in HTML - in addition to their current text output. The desired HTML output is shown below. Please implement a `Customer.htmlStatement()` method that returns this output.
2. The business wants to change the movie classifications. They may, for example, wish to remove "Children's" or add a new classification called "SciFi". Then again, they may simply wish to change the algorithms for calculating frequent renter points. **In other words, the classification / pricing / points system needs to be more flexible.** (This task is intentionally open-ended.)

### HTML Output for Task #1

```
<h1>Rental Record for <em>Joe Schmoe</em></h1>
<ul>
    <li>Back to the Future - 3</li>
    <li>Office Space - 3.5</li>
    <li>The Big Lebowski - 15</li>
<ul>
<p>Amount owed is <em>21.5</em>
<p>You earned <em>4</em> frequent renter points</p>
```

## Your Deliverables

1. Set up your interviewer as a collaborator on the repo you set up
2. Include a rough estimate of how much time you spent working on the assignment.
3. Also include any additional instructions / requirements for running your solution.
4. Finally, please feel free - though you're not required - to provide some "documentation" to justify any tradeoffs you might have made when writing the code and what implications those tradeoffs may have in the future - especially for the second "task" above.

Refactor Goals:
- Move all the calculation logic out of the bigger objects into separate ones, creating pure classes
- Having the calculations in separate classes would mean you could reuse for the HTML statement
- the Customer.statement() function should only output text, no logic
- There should be a way to programatically track rentals persistently, so storing rental records in an array of rental objects
- Store price codes in an array
- Make the Customer.htmlStatement() generate HTML from a template, rather than from a heredoc
