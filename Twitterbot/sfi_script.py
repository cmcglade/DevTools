
import tweepy, datetime, sys
import random
import twitterKeys

"""the following is the stuff Twitter uses and where you need to enter your consumer keys: your key and secret
key"""

class TwitterAPI:
    def __init__(self):
        auth = tweepy.OAuthHandler(twitterKeys.consumer_key, twitterKeys.consumer_secret)
        auth.set_access_token(twitterKeys.access_token, twitterKeys.access_token_secret)
        self.api = tweepy.API(auth)
 
    def tweet(self, message):
        self.api.update_status(status=message)

"""here we are reading from text files to get the Tweet content"""

firstList = open('StrategicForesight.txt','r')
secondList = open('Innovation.txt', 'r')

first = firstList.readlines()
second = secondList.readlines()
first = [n.replace('\n', '') for n in first]
firstList.close()
secondList.close()

tweet = random.choice(first) + random.choice(second) + "#PerformativeProxy"   

twitter = TwitterAPI()
twitter.tweet(tweet)