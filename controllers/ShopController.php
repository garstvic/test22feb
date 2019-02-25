<?php

namespace app\controllers;

use app\models\Authors;
use app\models\Book;

class ShopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAuthors()
    {
        $authors = Authors::find()->all();
        
        return $this->render('authors', ['authors' => $authors]);
    }
    
    public function actionAuthor($id, $img)
    {
        if (($author = Authors::findOne($id)) !== null)
        {
            return $this->render('author_view', ['author' => $author, 'img' => $img]);
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionAuthorBooks($id, $img)
    {
        if (($author = Authors::findOne($id)) !== null)
        {
            $books = $author->books;
            return $this->render('author_books', ['author' => $author, 'books' => $books, 'img' => $img]);
        }
    
        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionBookView($id, $img)
    {
        if (($book = Book::findOne($id)) !== null)
        {
            $author = $book->author;
            return $this->render('book_view', ['author' => $author, 'book' => $book, 'img' => $img]);
        }
    
        throw new NotFoundHttpException('The requested page does not exist.');        
    }

}
