CREATE TABLE IF NOT EXISTS movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    image VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    rating DECIMAL(3,1) NOT NULL
);

-- Action Movies
INSERT INTO movies (title, genre, image, description, rating) VALUES
('John Wick', 'Action', 'john.jpg', 'A retired hitman seeks vengeance for his beloved dog.', 7.4),
('Mad Max: Fury Road', 'Action', 'mad.jpg', 'In a post-apocalyptic world, Max helps a rebel flee a tyrant.', 8.1),
('Die Hard', 'Action', 'die.jpg', 'An NYPD officer fights terrorists in a Los Angeles skyscraper.', 8.2),
('The Dark Knight', 'Action', 'dark.jpg', 'Batman faces the Joker in this gritty superhero thriller.', 9.0),
('Gladiator', 'Action', 'gladiator.jpg', 'A betrayed general becomes a gladiator and seeks revenge.', 8.5),
('Inception', 'Action', 'inception.jpg', 'A thief steals secrets through dream-sharing technology.', 8.8),
('The Matrix', 'Action', 'matrix.jpg', 'A hacker discovers the truth about his reality and fights AI.', 8.7),
('Extraction', 'Action', 'extraction.jpg', 'A black-market mercenary embarks on a deadly rescue mission.', 6.8);

-- Drama Movies
INSERT INTO movies (title, genre, image, description, rating) VALUES
('The Shawshank Redemption', 'Drama', 'shawshank.jpg', 'Two imprisoned men bond over years, finding hope.', 9.3),
('Forrest Gump', 'Drama', 'forrest.jpg', 'The story of a slow-witted man who lived a full life.', 8.8),
('Fight Club', 'Drama', 'fight.jpg', 'An office worker and a soap maker form an underground club.', 8.8),
('The Pursuit of Happyness', 'Drama', 'happyness.jpg', 'A struggling salesman takes custody of his son.', 8.0),
('A Beautiful Mind', 'Drama', 'mind.jpg', 'A brilliant mathematician suffers from schizophrenia.', 8.2),
('The Godfather', 'Drama', 'godfather.jpg', 'The aging patriarch of an organized crime dynasty transfers control to his son.', 9.2),
('12 Years a Slave', 'Drama', '12years.jpg', 'A free black man is abducted and sold into slavery.', 8.1),
('Good Will Hunting', 'Drama', 'goodwill.jpg', 'A janitor at MIT has a gift for mathematics.', 8.3);

-- Love Movies
INSERT INTO movies (title, genre, image, description, rating) VALUES
('Titanic', 'Love', 'titanic.jpg', 'A romance aboard the ill-fated RMS Titanic.', 7.9),
('The Notebook', 'Love', 'notebook.jpg', 'A poor man and rich woman fall in love in the 1940s.', 7.8),
('La La Land', 'Love', 'lalaland.jpg', 'A musician and an aspiring actress fall in love.', 8.0),
('P.S. I Love You', 'Love', 'psiloveyou.jpg', 'A widow discovers letters left by her late husband.', 7.0),
('A Walk to Remember', 'Love', 'walk.jpg', 'A popular boy falls for a quiet, religious girl.', 7.4),
('Me Before You', 'Love', 'mebeforeyou.jpg', 'A caregiver and a paralyzed man form a bond.', 7.4),
('The Fault in Our Stars', 'Love', 'fault.jpg', 'Two teens with cancer fall in love.', 7.7),
('Eternal Sunshine', 'Love', 'eternal.jpg', 'A couple erases memories of each other.', 8.3);

-- Comedy Movies
INSERT INTO movies (title, genre, image, description, rating) VALUES
('The Hangover', 'Comedy', 'hangover.jpg', 'Three friends lose the groom during a bachelor party.', 7.7),
('Superbad', 'Comedy', 'superbad.jpg', 'Two high school friends try to enjoy their last days.', 7.6),
('Step Brothers', 'Comedy', 'stepbrothers.jpg', 'Two adult step brothers become roommates.', 6.9),
('21 Jump Street', 'Comedy', 'jumpstreet.jpg', 'Two cops go undercover at a high school.', 7.2),
('The Mask', 'Comedy', 'mask.jpg', 'A man finds a magical mask that transforms him.', 6.9),
('Bridesmaids', 'Comedy', 'bridesmaids.jpg', 'Competition between the bride\'s friends causes chaos.', 6.8),
('Yes Man', 'Comedy', 'yesman.jpg', 'A man decides to say yes to everything.', 6.8),
('Home Alone', 'Comedy', 'homealone.jpg', 'A young boy defends his home from burglars.', 7.6);

-- Sci-fi Movies
INSERT INTO movies (title, genre, image, description, rating) VALUES
('Inception', 'Sci-Fi', 'inception.jpg', 'A thief who steals corporate secrets through dream-sharing technology is given the task of planting an idea into a CEO\'s mind.', 8.8),
('Interstellar', 'Sci-Fi', 'interstellar.jpg', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', 8.6),
('The Matrix', 'Sci-Fi', 'matrix.jpg', 'A computer hacker learns about the true nature of his reality and his role in the war against its controllers.', 8.7),
('Blade Runner 2049', 'Sci-Fi', 'blade_runner_2049.jpg', 'A young blade runner discovers a long-buried secret that leads him to track down former blade runner Rick Deckard.', 8.0),
('Arrival', 'Sci-Fi', 'arrival.jpg', 'A linguist works with the military to communicate with alien lifeforms after twelve mysterious spacecraft appear around the world.', 7.9),
('The Martian', 'Sci-Fi', 'martian.jpg', 'An astronaut becomes stranded on Mars and must use his ingenuity to survive while awaiting rescue.', 8.0),
('Gravity', 'Sci-Fi', 'gravity.jpg', 'Two astronauts work together to survive after an accident leaves them stranded in space.', 7.7),
('Tenet', 'Sci-Fi', 'tenet.jpg', 'Armed with only one word, Tenet, and fighting for the survival of the world, a protagonist journeys through a twilight world of international espionage.', 7.3);

-- Horror movies
INSERT INTO movies (title, genre, image, description, rating) VALUES
('The Shining', 'Horror', 'the_shining.jpg', 'A recovering alcoholic and aspiring writer takes a job as winter caretaker at the haunted Overlook Hotel, where his sanity unravels.', 8.4),
('Psycho', 'Horror', 'psycho.jpg', 'A secretary embezzles money and ends up at a secluded motel, run by a disturbed man named Norman Bates.', 8.5),
('The Exorcist', 'Horror', 'the_exorcist.jpg', 'A mother seeks the help of two priests to rid her daughter of a demonic possession.', 8.0),
('Get Out', 'Horror', 'get_out.jpg', 'A young African-American man uncovers disturbing secrets when he visits his white girlfriend''s family.', 7.7),
('A Nightmare on Elm Street', 'Horror', 'nightmare_on_elm_street.jpg', 'A group of teenagers is tormented by a supernatural killer who enters their dreams, Freddy Krueger.', 7.5),
('Hereditary', 'Horror', 'hereditary.jpg', 'A family’s tragic death leads them down a terrifying path of dark secrets and supernatural horrors.', 7.3),
('It', 'Horror', 'it.jpg', 'Seven outcast children band together to defeat a shape-shifting evil entity that has plagued their town for generations.', 7.3),
('The Conjuring', 'Horror', 'the_conjuring.jpg', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.', 7.5),
('final destination','Horror', 'the_conjuring.jpg', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.', 7.5 );