    import pandas as pd
    import numpy as np
    import matplotlib.pyplot as plt
    
    dataset = pd.read_csv("training.tsv",delimiter="\t",quoting=3)

    import re
    import nltk
    nltk.download('wordnet')
    nltk.download('stopwords')
    from nltk.corpus import stopwords  
    from nltk.stem import WordNetLemmatizer 
    lemmatizer = WordNetLemmatizer() 
    stop_words = ['i', 'me', 'my', 'myself', 'we', 'our', 'ours', 'ourselves', 'you', "you're", "you've", "you'll", "you'd", 'your', 'yours', 'yourself', 'yourselves', 'he', 'him', 'his', 'himself', 'she', "she's", 'her', 'hers', 'herself', 'it', "it's", 'its', 'itself', 'they', 'them', 'their', 'theirs', 'themselves', 'what', 'which', 'who', 'whom', 'this', 'that', "that'll", 'these', 'those', 'am', 'is', 'are', 'was', 'were', 'be', 'been', 'being', 'have', 'has', 'had', 'having', 'do', 'does', 'did', 'doing', 'a', 'an', 'the', 'and', 'but', 'if', 'or', 'because', 'as', 'until', 'while', 'of', 'at', 'by', 'for', 'with', 'about', 'against', 'between', 'into', 'through', 'during', 'before', 'after', 'above', 'below', 'to', 'from', 'up', 'down', 'in', 'out', 'on', 'off', 'over', 'under', 'again', 'further', 'then', 'once', 'here', 'there', 'when', 'where', 'why', 'how', 'all', 'any', 'both', 'each', 'few', 'more', 'most', 'other', 'some', 'such', 'only', 'own', 'same', 'so', 'than', 'too', 'very', 's', 't', 'can', 'will', 'just', 'don', "don't", 'should', "should've", 'now', 'd', 'll', 'm', 'o', 're', 've', 'y', 'ain', 'aren', "aren't", 'couldn', "couldn't", 'didn', "didn't", 'doesn', "doesn't", 'hadn', "hadn't", 'hasn', "hasn't", 'haven', "haven't", 'isn', "isn't", 'ma', 'mightn', "mightn't", 'mustn', "mustn't", 'needn', "needn't", 'shan', "shan't", 'shouldn', "shouldn't", 'wasn', "wasn't", 'weren', "weren't", 'won', "won't", 'wouldn', "wouldn't"]
    corpus = []
    for i in range(0,len(dataset.index)):
       review = re.sub('[^a-zA-Z]',' ',dataset['Review'][i])
       review = review.lower()
       review = review.split()
       review = [lemmatizer.lemmatize(word) for word in review if not word in stop_words]
       review = ' '.join(review)
       corpus.append(review)
       
       
    from sklearn.feature_extraction.text import CountVectorizer
    cv = CountVectorizer(max_features = 500)
    X = cv.fit_transform(corpus).toarray()
    Y = dataset.iloc[:,1].values
    
    from sklearn.cross_validation import train_test_split
    X_train,X_test,Y_train,Y_test = train_test_split(X,Y,test_size=0.05,random_state=0)
    
    from sklearn.ensemble import RandomForestClassifier
    classifier = RandomForestClassifier(n_estimators=100,criterion='entropy',random_state=0)
    classifier.fit(X_train, Y_train)
    
    Y_pred = classifier.predict(X_test)
    
    from sklearn.metrics import confusion_matrix
    cm = confusion_matrix(Y_test,Y_pred)
    
    incorrects = np.nonzero(classifier.predict(X_test).reshape((-1,)) != Y_test)
    
    TP = cm[1][1]
    TN = cm[0][0]
    FP = cm[0][1]
    FN = cm[1][0]
    
    Accuracy = (TP + TN) / (TP + TN + FP + FN)
    Precision = TP / (TP + FP)
    Recall = TP / (TP + FN)
    
    F1_Score = 2 * Precision * Recall / (Precision + Recall)
