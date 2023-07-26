SELECT 	
		a.name,
		a.surname,
		COUNT (b.title) as "Liczba książek" 
		
FROM library.author a

		INNER JOIN library.book b ON a.id = b.author_id
		
GROUP BY a.id ORDER BY a.surname ASC