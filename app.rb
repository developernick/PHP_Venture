require 'bundler'
Bundler.require()

require 'rack-legacy'
use Rack::Legacy::Php, 'public'

ActiveRecord::Base.establish_connection(
	:adapter => 'postgresql',
	:database => 'appointmentDB'
)

get '/' do
	erb:index
end
