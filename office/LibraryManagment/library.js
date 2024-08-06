
class Book{
    constructor(title,author,isbn,publicationYear,status){
        this.title = title;
        this.author = author;
        this.isbn = isbn;
        this.publicationYear = publicationYear;
        this.status = status;
    }

    updateDetails(newTitle, newAuthor,newIsb, newPublicationYear,newStatus){
        this.title = newTitle;
        this.newAuthor = newAuthor;
        this.isbn = newIsb;
        this.publicationYear = newPublicationYear;
        this.status = newStatus;
    }

    getStatus(){
        return this.status;
    }

}



class Member{
    constructor(name,memberId,email){
        this.name = name;
        this.memberId = memberId;
        this.email = email;
        this.booksIssued = [];
    }

    updateDetails(newName,newEmail){
        this.name = newName;
        this.email = newEmail;
    }

    addBook(book){
        if(this.booksIssued.includes(book)){
            console.log(`Book ${book.title} is already issued to ${this.name}`);
        }
        else{
            this.booksIssued.push(book);
            console.log(`Book ${book.title} is issued to ${this.name}`);
        }
    }

    removeBook(book){
        const bookIndex = this.booksIssued.indexOf(book);
        console.log(bookIndex);

        if(bookIndex !== -1){
            this.booksIssued.splice(bookIndex, 1);
            console.log(`Book ${book.title} returned by ${this.name}.`);
        }else{
            console.log(`Book ${book.title} is not issued to ${this.name}.`);
        }
    }
}



// const bookObj1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "123456789", 1925, "available");
// const bookObj2 = new Book('1984', 'George Orwell', '987654321', 1949, "available")
// // console.log(bookObj.getStatus());

// let member1 = new Member('Alice', "M01", "alice@gmail.com");
// let member2 = new Member("John", "M02","john@gmail.com");


// member1.addBook(bookObj1);
// member2.addBook(bookObj2);


// // member1.removeBook(bookObj2);

// member1.removeBook(bookObj1);
// member2.removeBook(bookObj2);



class Library{
    constructor(){
        this.books = [];
        this.members = [];
        this.issuedRecords = [];
    }

    addBook(book){
        this.books.push(book);
        console.log(`Book ${book.title} Added to the library`);
    }
    
    removeBook(book){
        const bookIndex = this.books.indexOf(book);
        if(bookIndex !== -1){
            this.books.slice(bookIndex,1);
            console.log(`Book ${book.title} removed from the Library.`);
        }else{
            console.log(`Book ${book.title} not found in the Library.`);
        }

    }

    listBooks(){
        console.log(`List of Books in the Library : `);
        this.books.forEach(book => console.log(`- ${book.title} by ${book.author}`));
    }
    
    registerMember(member){
        this.members.push(member);
        console.log(`Member ${member.name} is registered in Library.`);
    }

    removeMember(member){
        const memberIndex = this.members.indexOf(member);
        if(memberIndex !== -1){
            this.members.splice(memberIndex, 1);
            console.log(`Member "${member.name}" removed from the Library.`);
        }else{
            console.log(`Member "${member.name}" not found in the Library.`);
        }
    }

    listMembers(){
        console.log(`List of Members in the Library:`);
        this.members.forEach(member => console.log(`Member ID : (${member.memberId}) - - ${member.name} `));
    }


    issueBook(member,book){
        if(this.books.includes(book) && book.status == 'available'){
            member.addBook(book);
            book.status = 'issued';
            const issueDate = new Date();
            const dueDate = new Date();
            dueDate.setDate(issueDate.getDate() + 14);
            const issuedRecord = new IssuedRecord(book,member,issueDate,dueDate);
            this.issuedRecords.push(issuedRecord);
            console.log(`Book ${book.title} issued to ${member.name} Due date of ${dueDate.toDateString()}`);
        }else{
            console.log(`Book ${book.title} is not Available for issuing.`);
        }
    }

    returnBook(member, book){
        if(member.booksIssued.includes(book)){
            member.removeBook(book);
            book.status = 'available';
            this.issuedRecords = this.issuedRecords.filter(record => record.book !== book);
            console.log(`Book ${book.title} returned by ${member.name}`);
        }else{
            console.log(`Book ${book.title} is not Issued to ${member.name}`);
        }
    }

}


class IssuedRecord{
    constructor(book,member,issueDate,dueDate){
        this.book = book;
        this.member = member;
        this.issueDate = issueDate;
        this.dueDate = dueDate;
    }

    updateDueDate(dueDate){
        this.dueDate = dueDate;
    }

    getDetails(){
        return `Book ${this.book.title}, Member: ${this.member.name}, Issue Date: ${this.issueDate.toDateString()}, Due Date: ${this.dueDate.toDateString()}`;
    }
}

let library = new Library();

const book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "123456789", 1925, "available");
const book2 = new Book('1984', 'George Orwell', '987654321', 1949, "available")
// // console.log(bookObj.getStatus());

let member1 = new Member('Alice', "M01", "alice@gmail.com");
let member2 = new Member("John", "M02","john@gmail.com");


// member1.addBook(bookObj1);
// member2.addBook(bookObj2);


// // member1.removeBook(bookObj2);

// member1.removeBook(bookObj1);
// member2.removeBook(bookObj2);




library.addBook(book1);
library.addBook(book2);


library.registerMember(member1);
library.registerMember(member2);

library.listBooks();
library.listMembers();



library.issueBook(member1,book1);
library.issueBook(member2, book2);

library.returnBook(member1,book1);
library.returnBook(member2,book2);



document.addEventListener('DOMContentLoaded',function(){
    const 
})